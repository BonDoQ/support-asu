<?php

class AppController extends Controller {
public function GetAllNotes()
{
	return getAllNotes();
}
public function GetAllSessions()
{
	return getAllSessions();
}
public function Login()
{
	return login();
}
public function GetAllInstructors()
{
	return getAllInstructors();
}
public function GetAllPlaces()
{
	return getAllPlaces();
}
}
