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
}
