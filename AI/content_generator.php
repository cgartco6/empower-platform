<?php
$posts = [
 "I’m sharing this because it helped me understand things without pressure.",
 "This isn’t a job offer. It’s just learning skills that make sense.",
 "I started with the free course first. That helped me decide.",
 "If online stuff confuses you, this explains it slowly."
];

$followups = [
 "Still getting messages about this, so sharing again.",
 "If you were unsure yesterday, maybe look today.",
 "No rush at all — just sharing what helped me."
];

echo "<h3>Today's Suggested Post</h3>";
echo "<p>".$posts[array_rand($posts)]."</p>";
echo "<h4>Evening Follow-up</h4>";
echo "<p>".$followups[array_rand($followups)]."</p>";
