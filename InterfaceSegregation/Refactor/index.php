<?php

declare(strict_types=1);

interface CanTeach
{
    public function teachCourse(Course $course);

    public function gradeStudent(Student $student);
}

interface CanEnroll
{
    public function enrollInCourse(Course $course);
}

interface CanAdminister
{
    public function managePlatformSettings();
}

class Teacher implements CanTeach
{
    public function gradeStudent(Student $student)
    {
        // TODO: Implement gradeStudent() method.
    }

    public function teachCourse(Course $course)
    {
        // TODO: Implement teachCourse() method.
    }
}

class Student implements CanEnroll
{
    public function enrollInCourse(Course $course)
    {
        // TODO: Implement enrollInCourse() method.
    }
}

class Administrator implements CanAdminister
{
    public function managePlatformSettings()
    {
        // TODO: Implement managePlatformSettings() method.
    }
}