<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
       {{--  <a href="<?php echo route('members.show',['id' => 14]) ?>">Test Link</a>  --}}
{{--
    route('users.comments.show',[1, 2])
    http://127.0.0.1:8000/users/UserID/comments/CommentID
    http://127.0.0.1:8000/users/1/comments/2


    route('users.comments.show',['userID' => 1, 'CommentID' => 2])
    http://127.0.0.1:8000/users/UserID/comments/CommentID
    http://127.0.0.1:8000/users/1/comments/2


    route('users.comments.show',['CommentID' => 2, 'userID' => 1])
    http://127.0.0.1:8000/users/UserID/comments/CommentID
    http://127.0.0.1:8000/users/1/comments/2


    route('users.comments.show',['userID' => 1, 'CommentID' => 2, 'opt' =>'a'])
    http://127.0.0.1:8000/users/UserID/comments/CommentID
    http://127.0.0.1:8000/users/1/comments/2?opt=a  --}}
    </body>
</html>
