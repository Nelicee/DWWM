<?php



$tabNotes = [
    "eleve 1" => ["notesMath" => [12, 14, 18, 20], "notesPhysique" => [16, 20, 16]],
    "eleve 2" => ["notesMath" => [8, 12, 18, 18], "notesPhysique" => [14, 20, 9]],
    "eleve 3" => ["notesMath" => [1, 20, 18, 20], "notesPhysique" => [12, 20, 4]],
    "eleve 4" => ["notesMath" => [4, 1, 18, 4], "notesPhysique" => [13, 20, 2]],
    "eleve 5" => ["notesMath" => [8, 9, 18, 12], "notesPhysique" => [14, 20, 8]],
];

foreach ($tabNotes as $key => $value) {
    $somme = 0;
    $nbNote = 0;
    
    echo 'Nom de l\'élève : ' . $key . "\n";
    
    echo "Ses notes en maths : ";
    foreach ($value['notesMath'] as $note) {
        echo $note . " .\n";
    }
    // echo '<br>';
    
    echo "Sa moyenne en maths : ";
    foreach ($value['notesMath'] as $note) {
        $somme += $note;
        $nbNote += 1;
    }
    echo $somme / $nbNote;
    echo "\n";
}
?>
