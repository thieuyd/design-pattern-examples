<?php

/**
 * Class UniversityStudent
 */
class UniversityStudent extends Student implements ApplyableInterface {
    /**
     * @inheritdoc
     */
    public function apply(): string
    {
        return 'Apply for UniversityStudent';
    }
}