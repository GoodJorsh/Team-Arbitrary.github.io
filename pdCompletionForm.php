<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="pdform.css">
</head>
<?php //pdCompletionForm.php
    include 'header.php';
?>
<section class="container">
    <h1 class="form-title">Professional Development Completion Form</h1>

    <!-- TODO: This action should point to a file that handles the $_POST superglobal
                by testing if all fields are set, and if so, make a SQL call to add
                this submission as a row. -->
    <form method="post" action="pdCompletionForm.php">
        <!-- EMPLOYEE STATUS RADIO BUTTONS -->
        <div class="employeeStatus section">
            <p>What is your employee status?</p>
            <input type="radio" name="status" id="full_time" value="full_time">
            <label for="status">Full-time Faculty Member</label><br>
            <input type="radio" name="status" id="adjunct" value="adjunct">
            <label for="status">Adjunct Faculty Member</label><br>
        </div><br>

        <!-- TEXT BOX FOR SESSION NAME --> 
        <div class="sessionName section">
            <label for="session">What professional development session or event did you attend?</label>
            <input type="text" name="sessionName" size="30" maxlength="50"><br>
        </div><br>

        <!-- RADIO BUTTONS FOR VIRTUAL OR IN-PERSON SESSIONS -->
        <div class="sessionType section">
            <p>Was the session you attended hosted virtually or in-person?</p>
            <input type="radio" name="sessionType" id="virtual" value="virtual">
            <label for="sessionType">Virtual</label><br>
            <input type="radio" name="sessionType" id="inPerson" value="inPerson">
            <label for="sessionType">In-Person</label><br>
        </div><br>

        <!-- START DATE OF SESSION -->
        <div class="sessionStartDate section">
            <label for="date">What day did this session begin?</label>
            <input type="date" name="startDate"><br>
        </div><br>

        <!-- END DATE OF SESSION -->
        <div class="sessionEndDate section">
            <label for="date">What day did this session end?</label>
            <input type="date" name="endDate"><br>
        </div><br>

        <!-- ORGANIZATION -->
        <div class="sessionOrg section">
            <label for="org">Which organization hosted this session?</label>
            <input type="text" name="org" size="30" maxlength="50"><br>
        </div><br>

        <!-- PRESENTER -->
        <div class="sessionPresenter section">
            <label for="presenter">Who was the main presenter? (Note: If there was a panel of presenters, simply write "panel.")</label>
            <input type="text" name="presenter" size="30" maxlength="50"><br>
        </div><br>

        <!-- DESCRIPTION -->
        <div class="sessionDescription section">
            <label for="description">Describe the session you attended and how it relates to your professional development.</label><br>
            <textarea class="description-box" name="description" rows="5" cols="80"></textarea>
        </div><br>

        <!-- SUBMIT BUTTON -->
        <input type="submit" value="SUBMIT">
    </form>
</section>

<?php 
    include'footer.php';
?>