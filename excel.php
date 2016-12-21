<?php
    require 'Sondage.php';
    require 'Question.php';
    require 'Reponse.php';
    $data = array();
    $questions = array();
    $sondage = new Sondage();
    $reponse = new Reponse();
    $sondage->setId($_GET['id']);
    $questions = $sondage->getSurveyQuestions();
    $question = new Question();
    $reponses = array();

    for($i = 0 ; $i < sizeof($questions) ; $i++) {

        $question->setIdQ($questions[$i][0]);
        $data[] = array($questions[$i][1],$questions[$i][2]);
        $reponses =  $question->getReponsesIds();

        for($j = 0 ; $j < sizeof($reponses); $j++){
            $reponse->setIdR($reponses[$j][0]);
            $data[$i][2][] = array($reponses[$j][1],$reponse->getFrequency($_GET['id'],$questions[$i][0]));
        }
        $data[$i][3] = $question->getOther($_GET['id']);
    }

    include 'Classes/PHPExcel.php';
    include 'Classes/PHPExcel/Writer/Excel2007.php';

    $objPHPExcel = new PHPExcel();
    $objWorksheet = $objPHPExcel->getActiveSheet();

    $ligne = 2;
    $col = 1;
    $h=1;

    for($k = 0; $k<sizeof($data); $k++){
        $data_line = $data[$k];

        //sauvegarde de ne numéro de ligne actuel
        $c = $ligne;
        $objWorksheet->setCellValueByColumnAndRow(0, $ligne-1, $data_line[0]);

        //Ecrire les reponse dans les colonnes B et leur fréquences dans les colonnes C
        if($data_line[1] == 'free'){

        }else {
            for ($i = 0; $i < sizeof($data_line[2]); $i++) {
                $objWorksheet->setCellValueByColumnAndRow($col, $ligne, $data_line[2][$i][0]);
                $objWorksheet->setCellValueByColumnAndRow($col + 1, $ligne, $data_line[2][$i][1]);
                $ligne++;
            }

            //L'axe X
            $xAxisTickValues = array(
                new PHPExcel_Chart_DataSeriesValues('String', 'Worksheet!$B$' . $c . ':$B$' . ($ligne - 1), NULL, $ligne - $c - 1),
            );

            //Les valeurs associé à l'axe X
            $dataSeriesValues1 = array(
                new PHPExcel_Chart_DataSeriesValues('Number', 'Worksheet!$C$' . $c . ':$C$' . ($ligne - 1), NULL, $ligne - $c - 1),
            );

            if ($data_line[1] == 'dich') $type = PHPExcel_Chart_DataSeries::TYPE_PIECHART;
            else $type = PHPExcel_Chart_DataSeries::TYPE_BARCHART;

            $series1 = new PHPExcel_Chart_DataSeries(
                PHPExcel_Chart_DataSeries::TYPE_BARCHART,                                          // plotType
                PHPExcel_Chart_DataSeries::GROUPING_CLUSTERED,  // plotGrouping
                range(0, count($dataSeriesValues1) - 1),          // plotOrder
                NULL,                                           // plotLabel
                $xAxisTickValues,                               // plotCategory
                $dataSeriesValues1                              // plotValues
            );

            $series1->setPlotDirection(PHPExcel_Chart_DataSeries::DIRECTION_COL);

            $plotarea = new PHPExcel_Chart_PlotArea(NULL, array($series1));

            $legend = new PHPExcel_Chart_Legend(PHPExcel_Chart_Legend::POSITION_RIGHT, NULL, false);

            $title = new PHPExcel_Chart_Title($data_line[0]);


            $chart = new PHPExcel_Chart(
                'chart1',       // name
                $title,         // title
                NULL,           // legend
                $plotarea,      // plotArea
                true,           // plotVisibleOnly
                0,              // displayBlanksAs
                NULL,           // xAxisLabel
                NULL            // yAxisLabel
            );

            $chart->setTopLeftPosition('N' . $h);
            $chart->setBottomRightPosition('T' . ($h + 10));

            $objWorksheet->addChart($chart);


            $ligne += 3;
            $h += 11;
        }
    }

    $writer = new PHPExcel_Writer_Excel2007($objPHPExcel);
    $writer->setIncludeCharts(true);

    header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition:inline;filename=resultats.xlsx ');

    $writer->save('php://output');