<?php
//this way the text is clickable for the radio buttons
echo 
"
<form action='' method='POST'>
    Write Name: <br>
    <input type='text' name='name'> <br>

    Birthday: <br>
    <input type='date' name='birthday'> <br>

    Choose course <br>
    <label><input type='radio' name='course' value='1' checked>Math </label> <br>
    <label><input type='radio' name='course' value='2' checked>Biology </label> <br>
    <label><input type='radio' name='course' value='3' checked>History </label> <br>
    <br>

    Rate! <br>
    (5 = best | 1 = worst)
    <select name='rate' multiple>
        <option name='element' value='5' selected> 5
        <option name='element' value='4' selected> 4
        <option name='element' value='3' selected> 3
        <option name='element' value='2' selected> 2
        <option name='element' value='1' selected> 1
    </select><br>

    <br>
    <input type='submit' value='OK'> <br>
</form>
";
//for select if we set it to multiple ??????????????

if(!empty($_POST['name']) && !empty($_POST['course']) 
    && !empty($_POST['rate']) && !empty($_POST['birthday']))
{
    echo $_POST['name']."s review can br found here: <br>";
    switch($_POST['course'])
    {
        //here we dont need <br> after each case echo 
        //cuse we only need 1 at the start of next echo
        case 1:
            echo "Choosen course: Math";
            break;
        case 2:
            echo "Choosen course: Biology";
            break;
        case 3:
            echo "Choosen course: History";
            break;
    }

    echo "<br> Your rate is: ".$_POST['rate'];

    //read out and convert to date format
    $date=strtotime($_POST['birthday']);
    //format setting
    echo "<br>".date("m/d/Y",$date);
}
else{
    echo "<br> There are empty fields";
}
?>
