<?php
function generateCourse($topic){
  return [
    "title" => $topic,
    "lessons" => [
      "What this skill is (plain language)",
      "Tools you already have",
      "Step-by-step beginner method",
      "Common mistakes",
      "Simple practice task"
    ]
  ];
}

$course = generateCourse("Digital Skills for Beginners");

echo "<h3>AI Course Outline</h3>";
echo "<b>".$course['title']."</b><ul>";
foreach($course['lessons'] as $l){
  echo "<li>$l</li>";
}
echo "</ul>";
