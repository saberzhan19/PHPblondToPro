<?php

//Здесь описано как оставлять отзывы
class carReview
{
    public function reviewText()
    {
        if($this->model === "Mers"){
            return "Good car";
        } elseif ($this->model === "Lada"){
            return "Bad car";
        }
        elseif ($this->model === "Lexus"){
            return "Best car";
        }
    }
}