<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Box with Default Text Area</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="comment-box">
        <h2>Leave a Comment</h2>
        <!-- Comment Input Form -->
        <form id="commentForm" method="POST" action="">
            <textarea id="commentInput" name="comment" placeholder="Write your comment here..." required>This is a default comment.</textarea>
            <button type="submit" name="submit">Submit</button>
        </form>

        <!-- Display Randomized Comments -->
        <div id="commentsSection">
            <h3>Randomized Comments</h3>
            <ul id="commentsList">
                <?php
                // Array of predefined comments
                $comments = [
                    "Great post!",
                    "I love this!",
                    "Very informative.",
                    "Awesome content!",
                    "Keep it up!",
                    "Interesting perspective.",
                    "Well written.",
                    "Thanks for sharing!"
                ];

                // Shuffle the comments array
                shuffle($comments);

                // Pick a random number of comments to display (e.g., 3)
                $numberOfComments = 3;
                $randomComments = array_rand($comments, $numberOfComments);

                // Display the randomized comments
                foreach ($randomComments as $index) {
                    echo "<li>{$comments[$index]}</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>