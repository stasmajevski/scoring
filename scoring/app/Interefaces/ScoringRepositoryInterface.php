<?php

interface ScoringRepositoryInterface
{
    public function emailScoring($email);

    public function phoneScoring($phone);

    public function educationScoring($education);

    public function termsScoring($terms);
}