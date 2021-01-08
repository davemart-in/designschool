<?php 
$course_array = $data[$course];
$lesson_position = array_flip(array_keys($course_array))[$lesson];
// Determine prev 
if ($lesson_position != 0) { 
$prev_lesson_array = array_slice($course_array, $lesson_position-1, 1);
$prev_lesson = reset($prev_lesson_array);
?>
<a href="/<?php echo $course; ?><?php echo $prev_lesson['href']; ?>"><strong>Prev</strong><?php echo $prev_lesson['title']; ?></a>
<?php
}
// Determine next
if ($lesson_position != count($course_array)-1) {
$next_lesson_array = array_slice($course_array, $lesson_position+1, 1);
$next_lesson = reset($next_lesson_array);
?>
<a href="/<?php echo $course; ?><?php echo $next_lesson['href']; ?>"><strong>Next</strong><?php echo $next_lesson['title']; ?></a>
<?php } ?>