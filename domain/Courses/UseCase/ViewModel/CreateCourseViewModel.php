<?php

namespace Domain\Courses\UseCase\ViewModel;

use Domain\Courses\Entity\Course;

class CreateCourseViewModel
{
    public Course $course;

    public function __construct(Course $course)
    {
        $this->course = $course;
    }
}
