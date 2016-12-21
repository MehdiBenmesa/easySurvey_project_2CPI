<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>survey Creator</title>
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="font-awesome/New%20folder/style.css" />
		<link rel="stylesheet" type="text/css" href="surveyCreator/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="surveyCreator/css/icons.css" />
		<link rel="stylesheet" type="text/css" href="surveyCreator/css/style2.css" />
        <link rel="stylesheet" type="text/css" href="button/css/vicons-font.css" />
        <link rel="stylesheet" type="text/css" href="button/css/buttons.css" />
        <link rel="stylesheet" type="text/css" href="simple-confirmation-popup/simple-confirmation-popup/css/style.css">
        <!--external css-->
        <!-- Custom styles for this template -->
		<script src="surveyCreator/js/modernizr.custom.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">


        <link href="css/Surveys.css" rel="stylesheet">


    </head>
	<body style="background: #A0C7B1; ">
<!--  Draggable-->
    <div class="form-horizontal free" id="free_tmp" type = "free" original ="y" style="display: none;" >
        <button id="remove_item" class="btn btn-default btn-xs " ><i class="icon icon-cross "></i></button>
        <div class="form-group" >
            <label class="col-sm-2 col-lg-2 control-label" >Question :</label>
            <div class="col-sm-10 col-lg-10">
                <textarea id="focusedInput" type="text" class="form-control" name ='free' value="Click to focus" ></textarea>
            </div>
            <div id="suggestion" style="display: none;">
                <div class="col-lg-2">Suggestion:</div>
                <div id="display_results" class="col-lg-10"></div>
            </div>
        </div>
        <button id="valide" class="btn btn-primary center-block"><i class="icon-checkmark "></i> Valider</button>
    </div>

    <div class="form-horizontal dich" id="dich_tmp" type="dich" original ="y" style="display: none;" >

        <button id="remove_item" class="btn btn-default btn-xs " ><i class="icon icon-cross "></i></button>

        <div class="form-group" >
            <label class="col-sm-2 col-lg-2 control-label" >Question :</label>
            <div class="col-sm-10 col-lg-10">
                <textarea id="focusedInput" type="text" class="form-control" name ='dich' value="Click to focus" ></textarea>
            </div>
            <div id="suggestion" style="display: none;">
                <div class="col-lg-2">Suggestion:</div>
                <div id="display_results" class="col-lg-10"></div>

            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" >Réponses :</label>
            <div class="col-sm-10" >
                <input type="text" class="form-control" >
            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" ></label>
            <div class="col-sm-10" >
                <input type="text" class="form-control">
            </div>
        </div>
        <button id="valide" class="btn btn-primary center-block"><i class="icon-checkmark "></i> Valider</button>
    </div>
    <div class='form-horizontal simple' id="simple_tmp" type ="simple" original ="y" style="display: none;" >

        <button id="remove_item" class="btn btn-default btn-xs " ><i class="icon icon-cross "></i></button>
        <div class="form-group" >
            <label class="col-sm-2 col-lg-2 control-label" >Question :</label>
            <div class="col-sm-10 col-lg-10">
                <textarea id="focusedInput" type="text" class="form-control" name ='simple' value="Click to focus" ></textarea>
            </div>
            <div id="suggestion" style="display: none;">
                <div class="col-lg-2">Suggestion:</div>
                <div id="display_results" class="col-lg-10"></div>
            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" >Réponses :</label>
            <div class="col-sm-10" >
                <input type="text" class="form-control" >
            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" > <button class='btn btn-shadow' id="add" ><i class="icon-plus "></i> Ajouter
                <i class='icon-plus-sign'></i>
            </button></label>
            <div class="col-sm-10" >
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" ></label>
            <div class="col-sm-10" >
                <input type="text" class="form-control">
            </div>
        </div>
        <button id="valide" class="btn btn-primary center-block"><i class="icon-checkmark "></i> Valider</button>
    </div>
    <div class='form-horizontal multiple' id="multiple_tmp" type ="multiple" original ="y" style="display: none;" >

        <button id="remove_item" class="btn btn-default btn-xs " ><i class="icon icon-cross "></i></button>
        <div class="form-group" >
            <label class="col-sm-2 col-lg-2 control-label" >Question :</label>
            <div class="col-sm-10 col-lg-10">
                <textarea id="focusedInput" type="text" class="form-control" name ='multiple' value="Click to focus" ></textarea>
            </div>
            <div id="suggestion" style="display: none;">
                <div class="col-lg-2">Suggestion:</div>
                <div id="display_results" class="col-lg-10"></div>

            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" >Réponses :</label>
            <div class="col-sm-10" >
                <input type="text" class="form-control" >
            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" > <button class='btn btn-shadow' id="add" >Ajouter
                <i class='icon-plus-sign'></i>
            </button></label>
            <div class="col-sm-10" >
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" ></label>
            <div class="col-sm-10" >
                <input type="text" class="form-control">
            </div>
        </div>
        <button id="valide" class="btn btn-primary center-block"><i class="icon-checkmark "></i> Valider</button>
    </div>
    <div class="form-horizontal level" id="level_tmp" type="level" original ="y" style="display: none;" >

        <button id="remove_item" class="btn btn-default btn-xs " ><i class="icon icon-cross "></i></button>

        <div class="form-group" >
            <label class="col-sm-2 col-lg-2 control-label" >Question :</label>
            <div class="col-sm-10 col-lg-10">
                <textarea id="focusedInput" type="text" class="form-control" name ='level' value="Click to focus" ></textarea>
            </div>
            <div id="suggestion" style="display: none;">
                <div class="col-lg-2">Suggestion:</div>
                <div id="display_results" class="col-lg-10"></div>
            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" >Réponses :</label>
            <div class="col-sm-10" >
                <input type="text" class="form-control" >
            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" ></label>
            <div class="col-sm-10" >
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" ></label>
            <div class="col-sm-10" >
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" ></label>
            <div class="col-sm-10" >
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group ">
            <label class="col-sm-2 control-label" ></label>
            <div class="col-sm-10" >
                <input type="text" class="form-control">
            </div>
        </div>
        <button id="valide" class="btn btn-primary center-block"><i class="icon-checkmark "></i> Valider</button>
    </div>
    <div class='form-horizontal list' id="list_tmp" type ="list" original ="y" style="display: none;" >

    <button id="remove_item" class="btn btn-default btn-xs " ><span class="icon-remove" ></span></button>
    <div class="form-group" >
        <label class="col-sm-2 col-lg-2 control-label" >Question :</label>
        <div class="col-sm-10 col-lg-10">
            <textarea id="focusedInput" type="text" class="form-control" name ='multiple' value="Click to focus" ></textarea>
        </div>
        <div id="suggestion" style="display: none;">
            <div class="col-lg-2">Suggestion:</div>
            <div id="display_results" class="col-lg-10"></div>

        </div>
    </div>
    <div class="form-group ">
        <label class="col-sm-2 control-label" >Réponses :</label>
        <div class="col-sm-10" >
            <input type="text" class="form-control" >
        </div>
    </div>
    <div class="form-group ">
        <label class="col-sm-2 control-label" > <button class='btn btn-shadow' id="add" >Ajouter
                <i class='icon-plus-sign'></i>
            </button></label>
        <div class="col-sm-10" >
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="form-group ">
        <label class="col-sm-2 control-label" ></label>
        <div class="col-sm-10" >
            <input type="text" class="form-control">
        </div>
    </div>
    <button id="valide" class="btn btn-primary center-block"><i class="icon-checkmark "></i> Valider</button>
</div>

<div class="form-group " id="tmp_radio" style="display: none">
    <label class="col-sm-2 control-label" ></label>
    <div class="col-sm-10" >
        <input type="text" class="form-control">
    </div>
</div>
<div class="form-group " id="tmp_check" style="display: none">
    <label class="col-sm-2 control-label" ></label>
    <div class="col-sm-10" >
        <input type="text" class="form-control">
    </div>
</div>
    <div class="container">
			<header class="codrops-header">
            </header>
			<div id="bt-menu" class="bt-menu">
                <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
                <div id="toDrag">
                    <button id = 'q_dich' class="button button--naira button--round-s button--border-thin"><i class="button__icon icon-flickr2 icon-2x"></i><span>Question Dichotomique</span></button>
                    <button id = 'q_simple'class="button button--naira button--round-s button--border-thin"><i class="button__icon icon-list icon-2x"></i><span>Question Simple</span></button>
                    <button  id= "q_multiple" class="button button--naira button--round-s button--border-thin"><i class="button__icon icon-list-numbered icon-2x"></i><span>Question Multiple</span></button>
                    <button id= "q_level" class="button button--naira button--round-s button--border-thin"><i class="button__icon  icon-list22 icon-2x " ></i><span>Question à Echelle</span></button>
                    <button id= "q_free" class="button button--naira button--round-s button--border-thin"><i class="button__icon icon-bubble3 icon-2x"></i><span>Question Libre</span></button>
                    <button id= "end" class="button button--naira button--round-s button--border-thin "><i class="button__icon icon-checkmark icon-2x"></i><span>Terminer</span></button>
                </div>

                <div class="col-lg-1"></div>
                <div  class="bt-overlay col-lg-11 " id="drop"></div>
                <div class="cd-popup" role="alert">
                    <div class="cd-popup-container">
                        <p>Voulez-vous garder ce formulaire comme modèle ?! </p>
                        <ul class="cd-buttons">
                            <li><a href="#0" id="saveModele">Oui</a></li>
                            <li><a href="#0" id="nonSaveModele">Non</a></li>
                        </ul>
                        <a href="#0" class="cd-popup-close img-replace">Close</a>
                    </div> <!-- cd-popup-container -->
                </div> <!-- cd-popup -->
            </div>
        <div id = "bank" style="display: none;">
            <header> <span> Banque de Questions</span> </header>
            <section>
                <button id = 'dich'  class='button button--naira button--round-s button--border-thin'><i class='button__icon icon-flickr2 icon-2x'></i><span>Question Dichotomique</span></button>
                <button id = 'simple' class='button button--naira button--round-s button--border-thin'><i class='button__icon icon-list icon-2x'></i><span>Question Simple</span></button>
                <button id= 'multiple' class='button button--naira button--round-s button--border-thin'><i class='button__icon icon-list-numbered icon-2x'></i><span>Question Multiple</span></button>
                <button  id= 'level' class='button button--naira button--round-s button--border-thin'><i class='button__icon  icon-list22 icon-2x'></i><span>Question à Echelle</span></button>
                <button  id= 'free' class='button button--naira button--round-s button--border-thin'><i class='button__icon icon-bubble3 icon-2x'></i><span>Question Libre</span></button>
            </section>
            <footer>

            </footer>
        </div>

    </div><!-- /container -->


        <div class="form-horizontal free"  type ='free' id="templateF" style="display: none;">

                <p id="question"> </p>

            <div class="form-group" >
                <br>
                <label class="col-sm-2 col-lg-2 control-label" >reponse:</label>
                <div class="col-sm-10 col-lg-10">
                    <textarea id="focusedInput" type="text" class="form-control"  value="Click to focus" ></textarea>
                </div>
            </div>
            <button id="cancelQuestion" class="btn  center-block col-lg-2">Annuler</button>
            <div class="col-lg-2"></div>
            <button id="editQuestion" class="btn btn-primary col-lg-2">Modifier</button>
        </div>
        <div class="form-horizontal level" id="templateL" type='level' style = "display: none" >
            <div class="form-control">
                <p id="question"> </p>
            </div>
            <div class="form-control">
                <label class="label_radio" for="radio-01">
                    <input  name="sample-radio" id="radio-01" value="1" type="radio" checked=""><span></span>
                </label>
            </div>
            <div class="form-control">
                <label class="label_radio" for="radio-02">
                    <input  name="sample-radio" id="radio-02" value="1" type="radio"><span></span>
                </label>
            </div>
            <div class="form-control">
                <label class="label_radio" for="radio-01">
                    <input  name="sample-radio" id="radio-01" value="1" type="radio" checked=""><span></span>
                </label>
            </div>
            <div class="form-control">
                <label class="label_radio" for="radio-01">
                    <input  name="sample-radio" id="radio-01" value="1" type="radio" checked=""><span></span>
                </label>
            </div>
            <div class="form-control">
                <label class="label_radio" for="radio-01">
                    <input  name="sample-radio" id="radio-01" value="1" type="radio" checked=""><span></span>
                </label>
            </div>
            <button id="cancelQuestion" class="btn  center-block col-lg-2">Annuler</button>
            <div class="col-lg-2"></div>
            <button id="editQuestion" class="btn btn-primary col-lg-2">Modifier</button>

        </div>
        <div class="form-horizontal dich" id="templateD"  type="dich" style = "display: none" >
            <div class="form-control">
                <p id="question"> </p>
            </div>
            <div class="form-control">
                <label class="label_radio" for="radio-01">
                    <input  name="sample-radio" id="radio-01" value="1" type="radio" checked=""><span></span>
                </label>
            </div>
            <div class="form-control">
                <label class="label_radio" for="radio-02">
                    <input  name="sample-radio" id="radio-02" value="1" type="radio"><span></span>
                </label>
            </div>
            <button id="cancelQuestion" class="btn  center-block col-lg-2">Annuler</button>
            <div class="col-lg-2"></div>
            <button id="editQuestion" class="btn btn-primary col-lg-2">Modifier</button>

        </div>
        <div class="form-horizontal simple"  id="templateS" type ='simple' style="display: none;">
            <div class="form-control">
                <p id="question"> </p>
            </div>

            <button id="cancelQuestion" class="btn  center-block col-lg-2">Annuler</button>
            <div class="col-lg-2"></div>
            <button id="editQuestion" class="btn btn-primary col-lg-2">Modifier</button>

        </div>
        <div class="form-horizontal multiple"  id="templateM" type ='multiple' style="display: none;">
            <div class="form-control">
                <p id="question"> </p>
            </div>
            <button id="cancelQuestion" class="btn  center-block col-lg-2">Annuler</button>
            <div class="col-lg-2"></div>
            <button id="editQuestion" class="btn btn-primary col-lg-2">Modifier</button>

        </div>


        <div class='form-control' id="radio" style="display: none">
            <label class='label_radio' for='radio-02'>
                <input  name='sample-radio' id='radio-02' value='1' type='radio'><span></span>
            </label>
        </div>

        <div class='form-control' id="checkBox" style="display: none">
            <label class='label_check' for='check'>
                <input  name='sample-chekbox' id='check' value='1' type='checkbox'><span></span>
            </label>
        </div>

    </body>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/respond.min.js" ></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>


    <!--common script for all pages-->

    <!--script for this page-->




    <script>
        $(document).ready(function() {
            /*Les variables Globales */
            dich = 1;
            simple = 1;
            multiple = 1;
            level = 1;
            free = 1;
            list = 1;
            canDrop = true;
            id = location.search.substring(4,location.search.length);
            if(id != ''){
                $.post('getNotCompletedSurvey.php',{id : id},function(data){
                        data = JSON.parse(data);
                        for(var i = 0 ; i < data.length; i++){
                            switch (data[i][2]){
                                case 'dich':
                                    var dich = $('#templateD').clone();
                                    dich.attr('id', data[i][0]);
                                    dich.css('display', 'block');
                                    dich.find('p').html(data[i][1]);
                                    var j = 0;
                                    dich.find('label span').each(function () {
                                        $(this).append(data[i][3][j]);
                                        j++;
                                    });
                                    $('#drop').append(dich);
                                    break;

                                case 'simple':

                                    var simple = $('#templateS').clone();
                                    simple.attr('id', data[i][0]);
                                    simple.css('display','block');
                                    simple.find('p').html(data[i][1]);
                                    for(var j = 0; j < data[i][3].length; j++){
                                        var radio = $('#radio').clone();
                                        radio.attr('id',' ');
                                        radio.css('display','block');
                                        radio.find('label span').append(data[i][3][j]);
                                        simple.find('#cancelQuestion').before(radio);
                                    }
                                    $('#drop').append(simple);
                                    break;
                                case 'multiple':

                                    var multiple = $('#templateM').clone();
                                    multiple.attr('id',data[i][0]);
                                    multiple.css('display','block');
                                    multiple.find('p').html(data[i][1]);
                                    for(var j = 0; j < data[i][3].length; j++){
                                        var check = $('#checkBox').clone();
                                        check.attr('id',' ');
                                        check.css('display','block');
                                        check.find('label span').append(data[i][3][j]);
                                        multiple.find('#cancelQuestion').before(check);
                                    }
                                    $('#drop').append(multiple);
                                    break;
                                case 'level':

                                    var level = $('#templateL').clone();
                                    level.attr('id',data[i][0]);
                                    level.css('display','block');
                                    level.find('p').html(data[i][1]);
                                    var j = 0;
                                    level.find('label span').each(function(){
                                        $(this).append(data[i][3][j]);
                                        j++;
                                    });
                                    $('#drop').append(level);
                                    break;

                                case 'free':
                                    var free = $('#templateF').clone();
                                    free.attr('id',data[i][0]);
                                    free.css('display','block');
                                    free.find('p').html(data[i][1]);
                                    $('#drop').append(free);
                                    break;
                            }
                        }
                });
            }

            $('#toDrag').find('button').draggable({
                cancel : false,
                cursor : 'move',
                helper : 'clone',
                revert : 'invalid'
            });

            $('#drop').droppable({

                drop : function(event, ui){
                    var clone;
                    if(canDrop) {
                        switch (ui.draggable.attr('id')) {
                            case 'q_dich':
                                clone = $('#dich_tmp').clone();
                                clone.attr('id', 'dich'+dich);
                                dich++;
                                clone.css('display', 'block');
                                $(this).append(clone);
                                canDrop = false;
                                break;
                            case 'q_simple':
                                clone = $('#simple_tmp').clone();
                                clone.attr('id', 'simple'+ simple);
                                simple++;
                                clone.css('display', 'block');
                                $(this).append(clone);
                                canDrop = false;
                                break;
                            case 'q_multiple':
                                clone = $('#multiple_tmp').clone();
                                clone.attr('id','multiple'+multiple);
                                multiple++;
                                clone.css('display','block');
                                $(this).append(clone);
                                canDrop = false;
                                break;
                            case 'q_level':
                                clone = $('#level_tmp').clone();
                                clone.attr('id','level'+level);
                                level++;
                                clone.css('display','block');
                                $(this).append(clone);
                                canDrop = false;
                                break;
                            case 'q_free':
                                clone = $('#free_tmp').clone();
                                clone.attr('id','free'+free);
                                free++;
                                clone.css('display','block');
                                $(this).append(clone);
                                canDrop = false;
                                break;
                            case 'q_list':
                                clone = $('#list_tmp').clone();
                                clone.attr('id','list'+list);
                                list++;
                                clone.css('display','block');
                                $(this).append(clone);
                                break;
                        }
                    }
                }
            });

            $(document).on('click', '#add', function() {
                var div = $(this).parent().parent().parent();
                div.find('#valide').before("<div class='form-group '> <label class='col-sm-2 control-label' ></label> <div class='col-sm-10' > <i class='icon-remove remove'></i> <input type='text' class='form-control'> </input> </div> </div>");
            });

            $(document).on('click','#remove_item',function(){
                var div = $(this).parent();
                div.remove();
                canDrop = true;
            });

            $('#toDrag button').click(function(){
                var clone;
                     if(canDrop) {
                         switch ($(this).attr('id')) {
                             case 'q_dich':
                                 clone = $('#dich_tmp').clone();
                                 clone.attr('id', 'dich' + dich);
                                 dich++;
                                 clone.css('display', 'block');
                                 $('#drop').append(clone);
                                 canDrop = false;
                                 break;
                             case 'q_simple':
                                 clone = $('#simple_tmp').clone();
                                 clone.attr('id', 'simple' + simple);
                                 simple++;
                                 clone.css('display', 'block');
                                 $('#drop').append(clone);
                                 canDrop = false;
                                 break;
                             case 'q_multiple':
                                 clone = $('#multiple_tmp').clone();
                                 clone.attr('id', 'multiple' + multiple);
                                 multiple++;
                                 clone.css('display', 'block');
                                 $('#drop').append(clone);
                                 canDrop = false;
                                 break;
                             case 'q_level':
                                 clone = $('#level_tmp').clone();
                                 clone.attr('id', 'level' + level);
                                 level++;
                                 clone.css('display', 'block');
                                 $('#drop').append(clone);
                                 canDrop = false;
                                 break;
                             case 'q_free':
                                 clone = $('#free_tmp').clone();
                                 clone.attr('id', 'free' + free);
                                 free++;
                                 clone.css('display', 'block');
                                 $('#drop').append(clone);
                                 canDrop = false;
                                 break;

                         }
                     }
                 });

            $(document).on('click','.remove',function(){
                var div = $(this).parent().parent();
                div.remove();
            });
            // quant on annule la question
            $(document).on('click','#cancelQuestion',function(){
                var div = $(this).parent();
                var id = div.attr('id');
                $.post('removeQuestion.php',{idQuestion : id},function(data){
                    alert(data);
                });
                div.remove();
            });
            // quant on click sur Valider
            $(document).on('click','#valide',function(){
                var div = $(this).parent().attr('id');
                var type = $(this).parent().attr('type');
                var original = $(this).parent().attr('original');
                var data = [];
                var textarea = $('#'+div).find('textarea').val();
                if(type != 'free') {
                    $('#' + div).find('input').each(function () {
                        data.push(this.value);
                        if (this.value != '' && textarea != '') {
                            canDrop = true;
                        } else {
                            canDrop = false;
                        }
                    });
                }else{
                    if(textarea != '') canDrop = true;
                    else canDrop = false;
                }
                if(canDrop) {

                    $.post('newAnswer.php', {jsondata: JSON.stringify(data), question : textarea, type : type, original : original}, function (answer, textStatus, jqXHR) {

                        switch(type){
                            case 'dich':
                                var dich = $('#templateD').clone();
                                dich.attr('id', answer);
                                dich.css('display', 'block');
                                dich.find('p').html(textarea);
                                dich.find('label span').each(function(){
                                    $(this).append(data.pop());
                                });
                                $('#'+div).replaceWith(dich);
                                break;
                            case 'simple':
                                var simple = $('#templateS').clone();
                                simple.attr('id', answer);
                                simple.css('display','block');
                                simple.find('p').html(textarea);
                                for(var i = 0; i < data.length ; i++){
                                    var radio = $('#radio').clone();
                                    radio.attr('id',' ');
                                    radio.css('display','block');
                                    radio.find('label span').append(data[i]);
                                    simple.find('#cancelQuestion').before(radio);
                                }
                                $('#'+div).replaceWith(simple);
                                break;
                            case 'multiple':
                                var multiple = $('#templateM').clone();
                                multiple.attr('id',' ');
                                multiple.css('display','block');
                                multiple.find('p').html(textarea);
                                for(var i = 0; i < data.length ; i++){
                                    var check = $('#checkBox').clone();
                                    check.attr('id','ch'+i);
                                    check.css('display','block');
                                    check.find('label span').append(data[i]);
                                    multiple.find('#cancelQuestion').before(check);
                                }
                                $('#'+div).replaceWith(multiple);
                                break;
                            case 'level':
                                var level = $('#templateL').clone();
                                level.attr('id',answer);
                                level.css('display','block');
                                level.find('p').html(textarea);
                                level.find('label span').each(function(){
                                    $(this).append(data.pop());
                                });
                                $('#'+div).replaceWith(level);
                                break;
                            case 'free':
                                var free = $('#templateF').clone();
                                free.attr('id',answer);
                                free.css('display','block');
                                free.find('p').html(textarea);
                                $('#'+div).replaceWith(free);
                                break;
                        }
                    });
                }else{
                    alert("vous devez remplir tous les champs");
                }

            });

            $(document).on('keyup','textarea',function(){

                var div = $(this).parent().parent().parent().attr('id');
                $.post('suggestion.php',{ keyword : $(this).val(), type : $(this).attr('name')},function(data){

                    if(data) {

                        $('#' + div).find('#suggestion').css('display','block');
                        $('#' + div).find('#display_results').html(data);

                    }else{
                        $('#' + div).find('#suggestion').css('display','none');
                    }
                });
            });

            $(document).on('click','#end',function(event){
                event.preventDefault();
                 if(!$('#drop').is(':empty') && canDrop == true){
                     $('.cd-popup').addClass('is-visible');
                     return false;
                 }

            });

            $(document).on('click','#saveModele', function () {
                $.post('sendNotification.php', function (data) {
                    if(data ==='true'){
                        $.post('saveModal.php',{id : id});
                        location.replace('indexens.php');
                    }
                });
            });

            $(document).on('click','#nonSaveModele', function () {
                $.post('sendNotification.php', function (data) {
                    if(data ==='true'){
                        location.replace('indexens.php');
                    }
                });
            });


            $(document).on('dblclick','option',function(){
                var div = $(this).parent().parent().parent().parent().attr('id');
                var type = $('#'+div).attr('type');
                var val = $(this).val();
                var id = $(this).attr('id');
                canDrop = true;
                $.post('newAnswer2.php',{ id_q : $(this).attr('id')},function(data){
                    // alert(JSON.parse(data));
                    data = JSON.parse(data);
                    switch(type) {
                        case 'dich':
                            var dich = $('#templateD').clone();
                            dich.attr('id', id);
                            dich.css('display', 'block');
                            dich.find('p').html(val);
                            var i = 0;
                            dich.find('label span').each(function () {
                                $(this).append(data[i]);
                                i++;
                            });
                            $('#' + div).replaceWith(dich);
                            break;

                        case 'simple':

                            var simple = $('#templateS').clone();
                            simple.attr('id', id);
                            simple.css('display','block');
                            simple.find('p').html(val);
                            for(var i = 0; i < data.length; i++){
                                var radio = $('#radio').clone();
                                radio.attr('id',' ');
                                radio.css('display','block');
                                radio.find('label span').append(data[i]);
                                simple.find('#cancelQuestion').before(radio);
                            }
                            $('#' + div).replaceWith(simple);
                            break;
                        case 'multiple':

                            var multiple = $('#templateM').clone();
                            multiple.attr('id',id);
                            multiple.css('display','block');
                            multiple.find('p').html(val);
                            for(var i = 0; i < data.length; i++){
                                var check = $('#checkBox').clone();
                                check.attr('id',' ');
                                check.css('display','block');
                                check.find('label span').append(data[i]);
                                multiple.find('#cancelQuestion').before(check);
                            }
                            $('#' + div).replaceWith(multiple);
                            break;
                        case 'level':

                            var level = $('#templateL').clone();
                            level.attr('id',id);
                            level.css('display','block');
                            level.find('p').html(val);
                            var i = 0;
                            level.find('label span').each(function(){
                                $(this).append(data[i]);
                                i++;
                            });
                            $('#'+div).replaceWith(level);
                            break;

                        case 'free':
                            var free = $('#templateF').clone();
                            free.attr('id',id);
                            free.css('display','block');
                            free.find('p').html(val);
                            $('#'+div).replaceWith(free);
                            break;
                    }
                });
            });

            $(document).on('click','#bank section button',function(){
                var type = $(this).attr('id');
                $.post('getBankQuestions.php',{type : $(this).attr('id')},function(data){
                       data = JSON.parse(data);
                    $('#bank section').html("");

                    for (var i = 0 ; i < data.length ; i++){
                            $('#bank section').append("Q"+(i+1)+" : <p id='"+data[i][0]+"' type ='"+type+"' >"+ data[i][1]+"</p>");
                        }
                    $('#bank footer').html("<button  id= 'back' class='button button--naira button--round-s button--border-thin'><i class='button__icon icon-bubble3 icon-2x'></i><span>Back</span></button>");

                });
            });

            $('.bt-menu-trigger').click(function(){
                $('#bank').toggle(300);
            });

            $(document).on('click','#back',function(){
                $('#bank section').html("<button id = 'dich'  class='button button--naira button--round-s button--border-thin'><i class='button__icon icon-flickr2 icon-2x'></i><span>Question Dichotomique</span></button> <button id = 'simple' class='button button--naira button--round-s button--border-thin'><i class='button__icon icon-list icon-2x'></i><span>Question Simple</span></button> <button id= 'multiple' class='button button--naira button--round-s button--border-thin'><i class='button__icon icon-list-numbered icon-2x'></i><span>Question Multiple</span></button> <button  id= 'level' class='button button--naira button--round-s button--border-thin'><i class='button__icon  icon-list22 icon-2x'></i><span>Question à Echelle</span></button> <button  id= 'free' class='button button--naira button--round-s button--border-thin'><i class='button__icon icon-bubble3 icon-2x'></i><span>Question Libre</span></button>");
                $('#bank footer').html("");
            });

            $(document).on('click','#bank section p',function(){
               var id = this.id;
                var val = this.innerHTML;
                var type = this.getAttribute('type');
                $.post('newAnswer2.php',{ id_q : id},function(data){
                    data = JSON.parse(data);
                    switch(type) {
                        case 'dich':
                            var dich = $('#templateD').clone();
                            dich.attr('id', id);
                            dich.css('display', 'block');
                            dich.find('p').html(val);
                            var i = 0;
                            dich.find('label span').each(function () {
                                $(this).append(data[i]);
                                i++;
                            });
                            $('#drop').append(dich);
                            break;

                        case 'simple':

                            var simple = $('#templateS').clone();
                            simple.attr('id', id);
                            simple.css('display','block');
                            simple.find('p').html(val);
                            for(var i = 0; i < data.length; i++){
                                var radio = $('#radio').clone();
                                radio.attr('id',' ');
                                radio.css('display','block');
                                radio.find('label span').append(data[i]);
                                simple.find('#cancelQuestion').before(radio);
                            }
                            $('#drop').append(simple);
                            break;
                        case 'multiple':

                            var multiple = $('#templateM').clone();
                            multiple.attr('id',id);
                            multiple.css('display','block');
                            multiple.find('p').html(val);
                            for(var i = 0; i < data.length; i++){
                                var check = $('#checkBox').clone();
                                check.attr('id',' ');
                                check.css('display','block');
                                check.find('label span').append(data[i]);
                                multiple.find('#cancelQuestion').before(check);
                            }
                            $('#drop').append(multiple);
                            break;
                        case 'level':

                            var level = $('#templateL').clone();
                            level.attr('id',id);
                            level.css('display','block');
                            level.find('p').html(val);
                            var i = 0;
                            level.find('label span').each(function(){
                                $(this).append(data[i]);
                                i++;
                            });
                            $('#drop').append(level);
                            break;

                        case 'free':
                            var free = $('#templateF').clone();
                            free.attr('id',id);
                            free.css('display','block');
                            free.find('p').html(val);
                            $('#drop').append(free);
                            break;
                    }
                });
            });

           $(document).on('click','#editQuestion',function(){
                var div = $(this).parent();
                var id = div.attr('id');
                var type = div.attr('type');
                var question = div.find('p').html();
                var reponses = [] ;
                var clone;
                div.find('label span').each(function(){
                        reponses.push($(this).html());
                });
                $.post('removeQuestion.php',{idQuestion : id});
                switch (type){
                    case 'dich':
                        clone = $('#dich_tmp').clone();
                        clone.attr('id', 'dich'+dich);
                        clone.attr('original','n');
                        dich++;
                        clone.css('display', 'block');
                        clone.find('textarea').html(question);
                        clone.find('input').each(function(){
                            $(this).val(reponses.pop());
                        });
                        $(div).replaceWith(clone);
                        canDrop = false;
                        break;
                    case 'simple':
                        clone = $('#simple_tmp').clone();
                        clone.attr('id', 'simple'+ simple);
                        clone.attr('original','n');
                        simple++;
                        clone.css('display', 'block');
                        clone.find('textarea').html(question);
                        var i = 0;
                            clone.find('input').each(function(){
                                $(this).val(reponses[i]);
                                i++;
                            });
                        for( i = 3 ; i < reponses.length; i++){
                            var radio = $('#tmp_radio').clone();
                            radio.css('display','block');
                            radio.attr('id', ' ');
                            radio.find('input').val(reponses[i]);
                            $(clone).find('#valide').before(radio);
                        }
                        $(div).replaceWith(clone);
                        canDrop = false;
                        break;
                    case 'multiple':
                        clone = $('#multiple_tmp').clone();
                        clone.attr('id','multiple'+multiple);
                        clone.attr('original','n');
                        multiple++;
                        clone.css('display','block');
                        clone.find('textarea').html(question);
                        var i = 0;
                        clone.find('input').each(function(){
                            $(this).val(reponses[i]);
                            i++;
                        });
                        for( i = 3 ; i < reponses.length; i++){
                            var check = $('#tmp_check').clone();
                            check.css('display','block');
                            check.attr('id', ' ');
                            check.find('input').val(reponses[i]);
                            $(clone).find('#valide').before(check);
                        }
                        $(div).replaceWith(clone);
                        canDrop = false;
                        break;
                    case 'level':
                        clone = $('#level_tmp').clone();
                        clone.attr('id','level'+level);
                        clone.attr('original','n');
                        level++;
                        clone.css('display','block');
                        clone.find('textarea').html(question);
                        var i = 0;
                        clone.find('input').each(function(){
                            $(this).val(reponses[i]);
                            i++;
                        });
                        $(div).replaceWith(clone);
                        canDrop = false;
                        break;
                    case 'free':
                        clone = $('#free_tmp').clone();
                        clone.attr('id','free'+free);
                        clone.attr('original','n');
                        free++;
                        clone.css('display','block');
                        clone.find('textarea').html(question);
                        $(div).replaceWith(clone);
                        canDrop = false;
                        break;

                }
            });

        });

    </script>

    <style>

        ::-
        ::-webkit-scrollbar{
            width: 5px;
        }
        #bank{

            min-height: 200px;
            width: 250px;
            position: absolute;
            top: 100px;
            padding: 20px;
            right: 0px;
            background: rgb(135, 165, 148);
        }

        #bank section{

            overflow: auto;
        }

        #displayBank{
            position: absolute;
            top: 0;
            right: 100px;
            color: red;
        }

        i, li ,p{
            cursor: pointer;
        }

        .draggable {
            width: 50px;
            height: 50px;


            top: 120px;
            cursor: pointer;

        }
        #toDrag button {
            background:rgba(105, 147, 123, 1);
            border:0px;
            border-radius: 0px;
        }
        #toDrag  button span{
            color: #ffffff;
            margin-left: 10px;

        }
        #editQuestion,#cancelQuestion{

       margin-top: 10px;

        }
/*
        .dich{
            padding: 10px;
            background-color: rgba(247, 18, 255, 0.07);
            margin: 10px;
        }
        .simple{
            padding: 10px;
            background-color: rgba(153, 255, 255, 0.18);
            margin: 10px;
        }
        .multiple{
            padding: 10px;
            background-color: rgba(84, 59, 58, 0.59);
            margin: 10px;
        }
        .level{
            padding: 10px;
            background-color: rgba(0, 1, 255, 0.05);
            margin: 10px;

        }
        .free{
            padding: 10px;
            background-color: rgba(253, 254, 255, 0.15);
            margin: 10px;
        }
        */
        #display_results {
            color: red;
            background: #CCCCFF;
        }
#bank header span{
    font-size:20px;
    font-family:-webkit-pictograph ;
    color :beige;
    border-bottom: 1px solid beige;
}
        #bank header{
            margin-left: 15px;
            margin-bottom: 20px;
        }
        #end{
            margin-top:40px;
        }

    </style>
    <script src="simple-confirmation-popup/simple-confirmation-popup/js/main.js"></script>
	<script src="surveyCreator/js/classie.js"></script>
	<script src="surveyCreator/js/borderMenu.js"></script>
</html>
