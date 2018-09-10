<?php
/**
 * Copyright (c) 2018. JoomPlace, all rights reserved
 */

namespace Joomplace\Component\Roadmap\Admin\Model;


use Joomplace\X\Model;

class Idea extends Model
{
    protected $fillable = ['title', 'description', 'project_id'];
}