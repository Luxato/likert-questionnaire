<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Likert questionaire | Collaboration With A Robot In The Virtual Slaughterhouse</title>
    <link rel="stylesheet" href="assets/bootstrap4.bootswatch.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/pretty-checkbox.min.css">
    <link rel="stylesheet" href="assets/animate.css">
    <style>
        .showed {
            display: inline-block !important;
        }

        .pretty .state label:before {
            border-color: #616161;
        }

        .pretty.p-default {
            font-size: 27px;
            background: #f7f7f7;
        }

        .special {
            width: 80px;
        }

        td {
            line-height: 40px;
            height: 40px;
        }

        .pretty.p-default {
            position: relative;
            top: 5px;
        }

        table {
            border-collapse: separate;
        }

        .table-bordered {
            border: 1px dashed #6f6f6f;
        }

        .btn {
            cursor: pointer;
        }

        .first tr td:nth-child(2), .second tr td:nth-child(2), .third tr td:nth-child(2) {
            width: 500px;
        }

        table tr td:nth-child(3) {
            width: 568px;
        }

        body {
            padding-bottom: 25px;
        }

        #tab2, #tab3, #buttonSubmit, #buttonBack {
            display: none;
        }

        .progressStyle {
            margin: 20px auto !important;
        }
    </style>
</head>
<body>
<div class="bs-component">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a style="text-transform: capitalize;" class="navbar-brand" href="#">Collaboration with a robot in the virtual
            Slaughterhouse</a>
    </nav>
    <div style="position: absolute; right: 0; z-index: 99;">
        <a target="_blank" style="margin: 0 20px; display: inline-block; position: relative; top: 10px;"
           href="http://www.en.aau.dk/"><img width="120" src="assets/aaulogo.png"
                                             alt="Aalborg university"></a>
    </div>
</div>
<!--Reponse modal-->
<div id="responseModal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="font-weight: bold;" class="modal-title">Data were sent!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Thank you for filling the questionnaire.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="z-index:-1;text-align: center; font-weight: bold; margin: 20px 0;">Questionnaire</h1>
            <div class="card border-warning mb-3" style="max-width: 40rem; border: none;">
                <div class="card-body text-warning">
                    <h4 class="card-title"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Please fill the
                        questions</h4>
                </div>
            </div>
            <div class="bs-component" style="width: 50%; display: block; margin: 20px auto;">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="33"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div style="text-align: center;">
                    <div class="tracking"><span class="currentPage">1</span>/3</div>
                </div>
            </div>
            <form action="<?= base_url() ?>process" method="POST">
                <div id="tabs">
                    <div id="tab1" class="animated fadeIn">
                        <table class="table first table-striped table-hover table-bordered">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Please state your gender</td>
                                    <td>
                                        <div>
                                            <label style="width:95px;"><h4><i class="fa fa-venus" aria-hidden="true"></i> <strong>Female</strong></h4></label>
                                            <div class="pretty p-default">
                                                <input type="checkbox"/>
                                                <div class="state p-success">
                                                    <label></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label style="width:95px;"><h4><i class="fa fa-mars" aria-hidden="true"></i> <strong>Male</strong></h4></label>
                                            <div class="pretty p-default">
                                                <input type="checkbox"/>
                                                <div class="state p-success">
                                                    <label></label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>Do you have previous butcher experience?</td>
                                    <td>
                                        <div>
                                            <label style="width:95px;"><h4><strong>Yes</strong></h4></label>
                                            <div class="pretty p-default">
                                                <input type="checkbox"/>
                                                <div class="state p-success">
                                                    <label></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label style="width:95px;"><h4><strong>No</strong></h4></label>
                                            <div class="pretty p-default">
                                                <input type="checkbox"/>
                                                <div class="state p-success">
                                                    <label></label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="tab1" class="animated fadeIn">
                        <h2 style="display: inline;">Version 1</h2>
                        <table class="table first table-striped table-hover table-bordered">
                            <tbody>
                            <tr>
                                <td>
                                    1.
                                </td>
                                <td>
                                    The robot arm’s speed in this version was
                                </td>
                                <td>
                                    <label class="special"><strong>Very bad</strong></label>
                                    <div class="pretty p-default">
                                        <input id="test" type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <label class="special"><strong>Very good</strong></label></td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    The overall feeling of safety in this version was
                                </td>
                                <td>
                                    <label class="special"><strong>Very bad</strong></label>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <label class="special"><strong>Very good</strong></label></td>
                            </tr>
                            </tbody>
                        </table>
                        <h2 style="display: inline;">Version 2</h2>
                        <table class="table first table-striped table-hover table-bordered">
                            <tbody>
                            <tr>
                                <td>
                                    1.
                                </td>
                                <td>
                                    The robot arm’s speed in this version was
                                </td>
                                <td>
                                    <label class="special"><strong>Very bad</strong></label>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <label class="special"><strong>Very good</strong></label></td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    The overall feeling of safety in this version was
                                </td>
                                <td>
                                    <label class="special"><strong>Very bad</strong></label>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <label class="special"><strong>Very good</strong></label></td>
                            </tr>
                            </tbody>
                        </table>
                        <h2 style="display: inline;">Version 3</h2>
                        <table class="table first table-striped table-hover table-bordered">
                            <tbody>
                            <tr>
                                <td>
                                    1.
                                </td>
                                <td>
                                    The robot arm’s speed in this version was
                                </td>
                                <td>
                                    <label class="special"><strong>Very bad</strong></label>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <label class="special"><strong>Very good</strong></label></td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    The overall feeling of safety in this version was
                                </td>
                                <td>
                                    <label class="special"><strong>Very bad</strong></label>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <label class="special"><strong>Very good</strong></label>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tab2" class="animated">
                        <table class="table third table-striped table-hover table-bordered">
                            <tbody>
                            <tr>
                                <td>
                                    1.
                                </td>
                                <td>
                                    I preffered version:
                                </td>
                                <td>
                                    <div>
                                        <label style="width:95px;"><h4><strong>Version 1</strong></h4></label>
                                        <div class="pretty p-default">
                                            <input type="checkbox"/>
                                            <div class="state p-success">
                                                <label></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label style="width:95px;"><h4><strong>Version 2</strong></h4></label>
                                        <div class="pretty p-default">
                                            <input type="checkbox"/>
                                            <div class="state p-success">
                                                <label></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label style="width:95px;"><h4><strong>Version 3</strong></h4></label>
                                        <div class="pretty p-default">
                                            <input type="checkbox"/>
                                            <div class="state p-success">
                                                <label></label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table third table-striped table-hover table-bordered">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label><span data-toggle="tooltip" data-placement="top" title=""
                                                     data-original-title="If you have something to tell us, please write it down."
                                                     aria-describedby="tooltip700438"><i class="fa fa-question-circle"
                                                                                         aria-hidden="true"></i></span>
                                            General comment field:</label>
                                        <textarea class="form-control" rows="3"
                                                  style="margin-top: 0px; margin-bottom: 0px; height: 80px;"></textarea>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tab3" class="animated">
                        <table class="table second table-striped table-hover table-bordered">
                            <tbody>
                            <tr>
                                <td>
                                    1.
                                </td>
                                <td>
                                    I have tried virtual reality before
                                </td>
                                <td>
                                    <div style="width: 285px;display: block;margin: 0 auto;">
                                        <label style="width: 45px;"><strong>Yes</strong></label>
                                        <div class="pretty p-default">
                                            <input type="checkbox"/>
                                            <div class="state p-success">
                                                <label></label>
                                            </div>
                                        </div>
                                        <div class="pretty p-default">
                                            <input type="checkbox"/>
                                            <div class="state p-success">
                                                <label></label>
                                            </div>
                                        </div>
                                        <label style="width: 45px;"><strong>No</strong></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>
                                    In terms of realism the VR environment was:
                                </td>
                                <td>
                                    <label class="special"><strong>Very bad</strong></label>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <label class="special"><strong>Very good</strong></label></td>
                            </tr>
                            <tr>
                                <td>
                                    2.
                                </td>
                                <td>
                                    In terms of realism the background sound effects were:
                                </td>
                                <td>
                                    <label class="special"><strong>Very bad</strong></label>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <label class="special"><strong>Very good</strong></label></td>
                            </tr>
                            <tr>
                                <td>
                                    3.
                                </td>
                                <td>
                                    In terms of realism the robot sound effects were:
                                </td>
                                <td>
                                    <label class="special"><strong>Very bad</strong></label>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <label class="special"><strong>Very good</strong></label></td>
                            </tr>
                            <tr>
                                <td>
                                    4.
                                </td>
                                <td>
                                    In terms of complexity I felt the system was:
                                </td>
                                <td>
                                    <label class="special"><strong>Very bad</strong></label>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <label class="special"><strong>Very good</strong></label></td>
                            </tr>
                            <tr>
                                <td>
                                    5.
                                </td>
                                <td>
                                    If this project was to be used to train butchers in the future to work alongside
                                    robot I
                                    think it would be:
                                </td>
                                <td>
                                    <label class="special"><strong>Very bad</strong></label>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <label class="special"><strong>Very good</strong></label></td>
                            </tr>
                            <tr>
                                <td>
                                    6.
                                </td>
                                <td>
                                    Looking at user friendliness the project was:
                                </td>
                                <td>
                                    <label class="special"><strong>Very bad</strong></label>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default">
                                        <input type="checkbox"/>
                                        <div class="state p-success">
                                            <label></label>
                                        </div>
                                    </div>
                                    <label class="special"><strong>Very good</strong></label>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped table-hover table-bordered">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label><span data-toggle="tooltip" data-placement="top" title=""
                                                     data-original-title="If you have something more, write it down."
                                                     aria-describedby="tooltip700438"><i class="fa fa-question-circle"
                                                                                         aria-hidden="true"></i></span>
                                            General comment field:</label>
                                        <textarea class="form-control" rows="3"
                                                  style="margin-top: 0px; margin-bottom: 0px; height: 80px;"></textarea>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="bs-component" style="width: 50%; display: block; margin: 0 auto;">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="33"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div style="text-align: center;">
                    <div class="tracking"><span class="currentPage">1</span>/3</div>
                </div>
            </div>
        </div>
        <div class="controllers" style="display: block; margin: 0 auto;">
            <div id="buttonBack" style="width: 100px; margin: 35px 0;" class="btn btn-lg btn-info">Back</div>
            <div id="buttonNext" style="width: 100px; margin: 35px 0;" class="btn btn-lg btn-primary">Next</div>
            <div id="buttonSubmit" style="width: 100px; margin: 35px 0;" class="btn btn-lg btn-success">Submit</div>
        </div>
    </div>
</div>


<script src="assets/popper.min.css"></script>
<script src="assets/jquery.slim.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
<script>
    $(function () {
        $('.progress-bar').css('width', '33%');
        $('[data-toggle="tooltip"]').tooltip();
        // Give all the inputs and text unique id and name
        var allInputs = $('input, textarea');
        for (var i = 0, max = allInputs.length; i < max; i++) {
            $(allInputs[i]).attr('id', i + 1);
            $(allInputs[i]).attr('name', i + 1);
        }
        // Prevent checking more checkboxes in one row.
        var inputs = $('input');
        inputs.on('click', function () {
            var localInputs = $(this).closest('td').find('input');
            for (var i = 0, max = localInputs.length; i < max; i++) {
                $(localInputs[i]).prop('checked', false);
                $(this).prop('checked', true);
            }
        });
        // Navigate between tabs with back and next buttons
        var currentTab = 1; // Global scope var.
        $('#buttonBack').on('click', function () {
            if (currentTab > 1) {
                currentTab--;
            }

            updateTabs();
        });
        $('#buttonNext').on('click', function () {
            if (currentTab <= 2) {
                currentTab++;
                if (currentTab == 2) {
                    $(this).hide();
                    $('#buttonSubmit').addClass('showed');
                }
            }
            updateTabs();
        });
        $('#buttonSubmit').on('click', function () {
            $('form').submit();
        });

        function updateTabs() {
            $('html, body').animate({scrollTop: '0px'}, 300);
            $('.currentPage').text(currentTab);
            switch (currentTab) {
                case 1:
                    $('.progress-bar').css('width', '33%');
                    $('#tab1').show();
                    $('#buttonNext').addClass('showed');

                    $('#buttonBack').hide();
                    $('#buttonBack').removeClass('showed');
                    $('#buttonSubmit').hide();
                    $('#buttonSubmit').removeClass('showed');
                    $('#tab2').hide();
                    $('#tab3').hide();
                    break;
                case 2:
                    $('.progress-bar').css('width', '66%');
                    $('#tab2').removeClass('fadeIn');
                    $('#tab2').show();
                    $('#tab2').addClass('fadeIn');
                    $('#buttonBack').addClass('showed');
                    $('#buttonNext').show();
                    $('#buttonNext').addClass('showed');

                    $('#tab1').hide();
                    $('#tab3').hide();
                    $('#buttonSubmit').hide();
                    $('#buttonSubmit').removeClass('showed');

                    /*$('.progress-bar').css('width', '100%');
                    $('#tab2').removeClass('fadeIn');
                    $('#tab2').show();
                    $('#tab2').addClass('fadeIn');
                    $('#buttonBack').addClass('showed');

                    $('#buttonNext').removeClass('showed');
                    $('#buttonNext').hide();
                    $('#tab1').hide();*/
                    break;
                case 3:
                    $('.progress-bar').css('width', '100%');
                    $('#tab3').removeClass('fadeIn');
                    $('#tab3').show();
                    $('#tab3').addClass('fadeIn');
                    $('#buttonBack').addClass('showed');
                    $('#buttonSubmit').show();
                    $('#buttonSubmit').addClass('showed');

                    $('#buttonNext').removeClass('showed');
                    $('#buttonNext').hide();
                    $('#tab1').hide();
                    $('#tab2').hide();
                default:
            }
        }
    });
    <?php
    if ($this->session->flashdata('response') == 'true') {
        echo "$('#responseModal').modal('show');";
    }
    ?>
</script>
</body>
</html>