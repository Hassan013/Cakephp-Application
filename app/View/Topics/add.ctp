<h1> Create Topics</h1>

<?php

     echo $this->Form->create('Topic');
     echo $this->Form->input('user_id');
     echo $this->Form->input('title');
     echo $this->Form->input('visible');
     echo $this-Form->end('Save_topic');

     