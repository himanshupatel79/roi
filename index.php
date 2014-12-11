<?php
/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package ROI
 * @version 1.0
 *
 * index.php is a main index file of ROI Application.
 *
 */
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ROI</title>
    <link rel="stylesheet" type="text/css" href="css/roi.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script name="javascript">
        $(document).ready(function () {

            $("#rup").blur(function () {
                var postForm = { //Fetch form data
                    'noe': $('input[name=noe]').val(), //Store no of employee fields value
                    'rup': $('input[name=rup]').val() //Store no of employee fields value
                };

                $.ajax({ //Process the form using $.ajax()
                    type: 'POST', //Method type
                    url: 'process.php', //Your form processing file URL
                    data: postForm, //Forms name
                    dataType: 'json',
                    success: function (data) {
                        if (!data.success) { //If fails
                            if (data.errors.noe) { //Returned if any error from process.php
                                $('.throw_noe_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                            }
                            if (data.errors.noe) { //Returned if any error from process.php
                                $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                            }
                        }
                        else {
                            $('#rupsav').val(data.rup);
                            $('#roify').val(data.rup);
                        }
                    }
                });
            });

            $("#empattriper").blur(function () {
                var postForm1 = { //Fetch form data
                    'noe': $('input[name=noe]').val(), //Store no of employee fields value
                    'empattriper': $('input[name=empattriper]').val() //Store no of employee fields value
                };
                $.ajax({ //Process the form using $.ajax()
                    type: 'POST', //Method type
                    url: 'process.php', //Your form processing file URL
                    data: postForm1, //Forms name
                    dataType: 'json',
                    success: function (data) {

                        if (!data.success) { //If fails
                            if (data.errors.rac) { //Returned if any error from process.php
                                $('.throw_noe_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                            }
                            if (data.errors.rac) { //Returned if any error from process.php
                                $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                            }
                        }
                        else {
                            $('#racsav').val(data.rac);
                            var racsav = parseFloat($('#racsav').val());
                            var rupsav = parseFloat($('#rupsav').val());
                            $('#roify').val(racsav + rupsav);
                        }
                    }
                });
            });

            $("#feeearnempper").blur(function () {
                var postForm = { //Fetch form data
                    'noe': $('input[name=noe]').val(), //Store no of employee fields value
                    'feeearnempper': $('input[name=feeearnempper]').val() //Store no of employee fields value
                };

                $.ajax({ //Process the form using $.ajax()
                    type: 'POST', //Method type
                    url: 'process.php', //Your form processing file URL
                    data: postForm, //Forms name
                    dataType: 'json',
                    success: function (data) {
                        if (!data.success) { //If fails
                            if (data.errors.noe) { //Returned if any error from process.php
                                $('.throw_noe_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                            }
                            if (data.errors.noe) { //Returned if any error from process.php
                                $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                            }
                        }
                        else {
                            $('#fwchsave').val(data.fee);
                            var racsav = parseFloat($('#racsav').val());
                            var rupsav = parseFloat($('#rupsav').val());
                            var fwchsave = parseFloat($('#fwchsave').val());
                            $('#roify').val(racsav + rupsav + fwchsave);
                        }
                    }
                });
            });

            $("#hrdsize").blur(function () {
                var postForm = { //Fetch form data
                    'noe': $('input[name=noe]').val(), //Store no of employee fields value
                    'hrs': $('input[name=hrdsize]').val() //Store no of employee fields value
                };

                $.ajax({ //Process the form using $.ajax()
                    type: 'POST', //Method type
                    url: 'process.php', //Your form processing file URL
                    data: postForm, //Forms name
                    dataType: 'json',
                    success: function (data) {
                        if (!data.success) { //If fails
                            if (data.errors.noe) { //Returned if any error from process.php
                                $('.throw_noe_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                            }
                            if (data.errors.noe) { //Returned if any error from process.php
                                $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                            }
                        }
                        else {
                            $('#fwahsave').val(data.hrs);
                            var racsav = parseFloat($('#racsav').val());
                            var rupsav = parseFloat($('#rupsav').val());
                            var fwchsave = parseFloat($('#fwchsave').val());
                            var fwahsave = parseFloat($('#fwahsave').val());
                            $('#roify').val(racsav + rupsav + fwchsave + fwahsave);
                            //fwahsave
                        }
                    }
                });
            });

        });
    </script>
</head>
<body>

<div id="header">
    <h1>ROI Savings</h1>
</div>
<span class="throw_error"></span>
<!--<span class="success"></span>-->
<div id="nav">
    <form method="post" name="postForm">
        <ul>
            <li>
                <label><strong>How many employees are there in your organisation? </strong></label>
                <input type="text" size=3 name="noe" id="noe" placeholder="100">
            </li>
            <li>
                <label><strong>Reduce under performance: </strong>

                    <p> Every organisation has a number of under-performers. The real challenge is to identify
                        under-performance and then deal with it appropriately (either by improving Potential Benefit or
                        headcount) We will help you identify underperformers quickly. Typically, 10% of an
                        organisation's employees will underperform.</p>

                    <p>Our software will typically identify your underachievers within the first 3 months.</p>

                    <p>What is your average cost per employee for under-performance? (IN GBP)
                        &pound;<input type="text" size=3 name="rup" id="rup" placeholder=" 100"></p>
                </label>

            </li>

            <li>
                <label><strong> Reduce attrition costs</strong>

                    <p>
                        Nowadays, people expect to be valued, developed and given regular feedback. If people are not
                        managed effectively or rewarded appropriately, they will leave. In professional services, this
                        cost is much higher due to the higher average salaries, amount of training invested, client
                        relationships built and the high cost of recruiting new people. Typically, an organisation will
                        pay 17% attrition costs over and above the employee's salary.</p>

                    <p>What is the attrition rate of your organisation? (IN a Percentage)
                        <input type="text" size=1 name="empattriper" id="empattriper" placeholder="17">%
                    </p>
                </label>
            </li>

            <li>
                <label><strong>Fewer wasted chargeable hours</strong>

                    <p>We enable the removal of paper based processes and the high administrative burden for Fee
                        Earners. ObjectiveManager transitions objective setting from a once yearly 'paperwork exercise'
                        to a way of working, increasing focus on key business goals. If every Fee-Earner saved just 2
                        hours per annum, they can employ that time more effectively. What if your fee-earners re-gained
                        just 2 chargeable hours each (@&pound;150hr) every year?</p>

                    <p>What percentage of your employees are fee earners?
                        <input type="text" size=1 name="feeearnempper" id="feeearnempper" placeholder="100">%
                    </p>
                </label>
            </li>

            <li>
                <label><strong> Fewer wasted administration hours</strong>

                    <p>The average cost of one HR Officer's time running and collating paper based systems for up to 500
                        people is &pound;7,800. This figure, we know is very conservative and tends to be much higher in
                        professional services firms where the review process can be challenging and iterative.</p>

                    <p>What is the size of your HR department?</p>
                </label>
                <input type="text" size=3 name="hrdsize" id="hrdsize" placeholder="100">
            </li>
        </ul>
    </form>
</div>

<div id="section">
    <ol>
        <li>
            <p><strong>Reduce under performance:</strong></p> Your saving is
            &pound;<input type="text" size=10 name="rupsav" id="rupsav" readonly placeholder="0">
        </li>
        <li>
            <p><strong>Reduce attrition costs:</strong></p>Assuming an average salary of &pound;25000, we will save you
            &pound;<input type="text" size=10 name="racsav" id="racsav" readonly placeholder="0">
        </li>

        <li>
            <p><strong>Fewer wasted chargeable hours:</strong></p> You could save
            &pound;<input type="text" size=10 name="fwchsave" id="fwchsave" readonly placeholder="0">
            for your fee earners
        </li>
        <li>
            <p><strong>Fewer wasted administration hours:</strong></p> We can save you
            &pound;<input type="text" size=10 name="fwahsave" id="fwahsave" readonly placeholder="0">
        </li>
    </ol>
    <hr>
    <p>Total: Provide total savings</p>

    <p>Typical cost of implementation: &pound;20 000</p>

    <p><strong>Your return on investment in the first year will be:</strong></p>
    &pound;<input type="text" size=10 name="roify" id="roify" readonly placeholder="0">

</div>

<div id="footer">
    Copyright &copy; company.com
</div>
</body>
</html>