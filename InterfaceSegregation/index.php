<?php

declare(strict_types=1);

interface User
{
    public function teachCourse();

    public function enrollInCourse();
    
    public function gradeStudent();

    public function managePlatformSettings();
}

class Teacher implements User
{
    public function teachCourse()
    {

    }

    public function enrollInCourse()
    {
        // Doesn't make sense
    }

    public function gradeStudent()
    {
        // Doesn't make sense
    }

    public function managePlatformSettings()
    {
        // Doesn't make sense
    }
}

class Student implements User
{
    public function teachCourse()
    {
        // Doesn't make sense
    }

    public function enrollInCourse()
    {

    }

    public function gradeStudent()
    {

    }

    public function managePlatformSettings()
    {
        // Doesn't make sense
    }
}

class Administrator implements User
{
    public function teachCourse()
    {
        // Doesn't make sense
    }

    public function enrollInCourse()
    {
        // Doesn't make sense
    }

    public function gradeStudent()
    {
        // Doesn't make sense
    }

    public function managePlatformSettings()
    {

    }
}