<?php

$comments = [
    [1, 1, "Comment 1"],
    [2, 1, "Comment 2"],
    [3, 2, "Comment 3"],
    [4, 1, "Comment 4"],
    [5, 2, "Comment 5"],
    [6, 3, "Comment 6"],
    [7, 7, "Comment 7"],
];

$commentsByParent = [];
foreach($comments as $comment) {
    if ($comment[0] == $comment[1]) {
        $comment[1] = 0;
    }
    $commentsByParent[$comment[1]][] = $comment;
}

function buildTree(array $comments, int $parent = 0): void {
    echo "<ul>\n";
    foreach($comments[$parent] as $comment) {
        echo "<li>\n";
        echo $comment[2];
        if (isset($comments[$comment[0]])) {
            buildTree($comments, $comment[0]);
        }
        echo "</li>\n";
    }
    echo "</ul>\n";
}

buildTree($commentsByParent);
