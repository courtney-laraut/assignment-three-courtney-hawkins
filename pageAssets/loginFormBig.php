<form id="support-form" action="problem.php" method="post">
        <label class="support-label" for="titles"> Title:</label>
            <select class="support-inputs" name="titles" id="titles" required>
                <option value=""> </option>
                <option value="Mr.">Mr.</option>
                <option value="Ms.">Ms.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Dr.">Dr.</option>
                <option value="Esq.">Esq.</option>
                <option value="Hon.">Hon.</option>
            </select>
        <label class="support-label" for="fName">First Name:</label>
            <input class="support-inputs" type="text" id="fName" name="fName" required maxlength=25>
        <label class="support-label" for="lName">Last Name:</label>
            <input class="support-inputs" type="text" id="lName" name="lName" required required maxlength=25>
        <label class="support-label" for="roles"> Role:</label>
            <select class="support-inputs" name="roles" id="roles" required>
                <option value=""> </option>
                <option value="Admin">Admin</option>
                <option value="Manager">Manager</option>
                <option value="CEO">CEO</option>
            </select>
        <input class="support-inputs" type="submit" id="submit" value="login">
    </form>