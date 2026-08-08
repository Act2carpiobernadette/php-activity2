
    /*
    fullname:Bernadette C. Carpio
    age;20
    cys:ACT2B
    address:st.Gunao San Jose Paombong Bulacan
    */
    
    <?php 
    $name="Bernadette";
    $age=20;
    $address="Paombong,Bulacan,San jose";
    $hobbies="playing online games";
    $dream_job="N/A";
    $course="Asssociate in Computer Technology";
    $school="Bulacan Polytechnic College";
    
    echo "<h2>My Personal Information</h2>";
    echo "<p><strong>Name:</strong> " . $me["name"] . "</p>";
    echo "<p><strong>Age:</strong> " . $me["age"] . "</p>";
    echo "<p><strong>Address:</strong> " . $me["address"] . "</p>";
    echo "<p><strong>Hobbies:</strong> " . $me["hobbies"] . "</p>";
    echo "<p><strong>Dream Job:</strong> " . $me["dream_job"] . "</p>";
    echo "<p><strong>Course:</strong> " . $me["course"] . "</p>";
    echo "<p><strong>School:</strong> " . $me["school"] . "</p>";
    
    print "I am " . $me{"name"} . ", a " . $me{"course"} . " student of " . $me{"school"} . ".";
    ?>
 