
<?php
error_reporting(1);
$conn=mysqli_connect('localhost','root','','webdeveloper') or die('connection lost');
    mysqli_query($conn, 'SET NAMES utf8');
    function GetCraetWebPages($conn){
        $select=mysqli_query($conn,'select * from responsive_webpages');
        $data=mysqli_fetch_array($select);
        return $data;

    }

function GetDescriptions($conn){
    $select=mysqli_query($conn,"select * from `descriptions`");
    $data=mysqli_fetch_array($select);
    return $data;

}

function GetWebPages($conn){
        $select=mysqli_query($conn,"select * from `web_pages`");
        $data=[];
        while ($row = mysqli_fetch_array($select)){
            array_push($data,$row);
        }
        return $data;

}
function GetOurPost($conn){
    $select=mysqli_query($conn,"select * from `newposts`");
    $data=[];
    while ($row = mysqli_fetch_array($select)){
        array_push($data,$row);
    }
    return $data;

}
function OurTeam($conn){
    $select=mysqli_query($conn,"select * from `ourteam`");
    $data=[];
    while ($row = mysqli_fetch_array($select)){
        array_push($data,$row);
    }
    return $data;

}
function GetSocial($conn){
    $select=mysqli_query($conn,"select * from `social`");
    $data=[];
    while ($row = mysqli_fetch_array($select)){
        array_push($data,$row);
    }
    return $data;

}
function GetQuestions($conn){
    $select=mysqli_query($conn,"select * from `questions`");
    $data=[];
    while ($row = mysqli_fetch_array($select)){
        array_push($data,$row);
    }
    return $data;

}
function bigProjects($conn){
    $select=mysqli_query($conn,"select * from `descriptions` WHERE id=6");
    $data=mysqli_fetch_array($select);
    return $data;
}
function OurTeamDescription($conn){
    $select=mysqli_query($conn,"select * from `descriptions` WHERE id=12");
    $data=mysqli_fetch_array($select);
    return $data;
}

function NewPosts($conn){
    $select=mysqli_query($conn,"select * from `descriptions` WHERE id=11");
    $data=mysqli_fetch_array($select);
    return $data;
}
function Questions($conn){
    $select=mysqli_query($conn,"select * from `descriptions` WHERE id=13");
    $data=mysqli_fetch_array($select);
    return $data;
}
function DesignBackend($conn){
    $select=mysqli_query($conn,"select * from `back_front`");
    $data=mysqli_fetch_array($select);
    return $data;
}
function sp_GetFooter($conn){
   $select=mysqli_query($conn,'CALL GetFooterData');
    $data=[];
    while ($row = mysqli_fetch_array($select)){
        array_push($data,$row);
    }
    return $data;
}







?>