<?php
session_start();

require 'config.php';

require BASE_DIR . '/libs/db.php';


require BASE_DIR . '/models/BaseModel.php';
require BASE_DIR . '/models/Books.php';
require BASE_DIR . '/models/Genres.php';
require BASE_DIR . '/models/Authors.php';
require BASE_DIR . '/functions/FindBooks.php';

require BASE_DIR . '/controllers/BaseController.php';

//User is logged in?
