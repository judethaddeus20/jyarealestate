@extends('errors::illustrated-layout')

@section('title', __('Forbidden'))

@section('code', '403')

@section('message', __($exception->getMessage() ?: 'Forbidden. You have no rights or permissions to access this URL.'))
