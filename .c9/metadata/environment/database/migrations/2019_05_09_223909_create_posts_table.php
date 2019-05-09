{"filter":false,"title":"2019_05_09_223909_create_posts_table.php","tooltip":"/database/migrations/2019_05_09_223909_create_posts_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreatePostsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('posts', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('posts');","    }","}"],"id":2},{"start":{"row":0,"column":0},"end":{"row":62,"column":1},"action":"insert","lines":["<?php","","","","use Illuminate\\Support\\Facades\\Schema;","","use Illuminate\\Database\\Schema\\Blueprint;","","use Illuminate\\Database\\Migrations\\Migration;","","","","class CreatePostsTable extends Migration","","{","","    /**","","     * Run the migrations.","","     *","","     * @return void","","     */","","    public function up()","","    {","","        Schema::create('posts', function (Blueprint $table) {","","            $table->increments('id');","","            $table->string('name');","","            $table->timestamps();","","        });","","    }","","","","    /**","","     * Reverse the migrations.","","     *","","     * @return void","","     */","","    public function down()","","    {","","        Schema::dropIfExists('posts');","","    }","","}"]}]]},"ace":{"folds":[],"scrolltop":689,"scrollleft":0,"selection":{"start":{"row":62,"column":1},"end":{"row":62,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":42,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1557442152547,"hash":"93b18e38f756c8e5c61195e83bd2798bdeaf7487"}