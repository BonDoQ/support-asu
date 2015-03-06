<?php

class AppController extends Controller {
public function GetAllNotes($year)
{
	return getAllNotes($year);
}
public function GetAllSessions($year)
{
	return getAllSessions($year);
}
public function Login($email,$password)
{
	return login($email,$password);
}
public function GetAllInstructors($year)
{
	return getAllInstructors($year);
}
public function GetAllPlaces()
{
	return getAllPlaces();
}
public function getDBVersion()
{
	return getDBVersion();
}
public function DownloadUserSession($userId)
{
	return downloadUserSession($userId);
}
public function Registration($userName, $year, $e_mail, $password, $phone, $avatarNum)
{
	return registration($userName, $year, $e_mail, $password, $phone, $avatarNum);
}
public function DeleteUserSession($userId)
{
	return deleteUserSession($userId);
}
public function UserDetails($userId)
{
	return userDetails($userId);
}
public function UploadUserSession($userId, $sessionId)
{
	return uploadUserSession($userId, $sessionId);
}
public function UploadNote($content, $Time, $day, $userId, $Title)
{
	return uploadNote($content, $Time, $day, $userId, $Title);
}
public function UpdateUser($userId, $new_userName, $oldPassword, $newPassword)
{
	return update_user($userId, $new_userName, $oldPassword, $newPassword);
}
public function DeleteNote($userId)
{
	return deleteNote($userId);
}

}
