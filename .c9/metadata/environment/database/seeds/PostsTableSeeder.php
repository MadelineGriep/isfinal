{"filter":false,"title":"PostsTableSeeder.php","tooltip":"/database/seeds/PostsTableSeeder.php","undoManager":{"mark":9,"position":9,"stack":[[{"start":{"row":12,"column":0},"end":{"row":21,"column":5},"action":"remove","lines":["    public function run() {","        $faker = Faker::create();","","        foreach(range(1, 50) as $index) {","            Post::create([","                'title'     => $faker->sentence(5),","                'content'   => $faker->paragraph(4)","            ]);","        }","    }"],"id":9},{"start":{"row":12,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["public function run()","{","    factory('App\\Post', 10)->create();","}"]}],[{"start":{"row":12,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":["public function run()","{","    factory('App\\Post', 10)->create();","}"]},{"start":{"row":12,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["public function run()","{","    factory('App\\Post', 10)->create();","}"]}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":12}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "],"id":13}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":8},"action":"insert","lines":["    "],"id":14}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "],"id":15}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":8},"action":"insert","lines":["    "],"id":16}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "],"id":17}],[{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"remove","lines":["1"],"id":18}],[{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["5"],"id":19}]]},"ace":{"folds":[],"scrolltop":72.5,"scrollleft":0,"selection":{"start":{"row":14,"column":29},"end":{"row":14,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1557445617450,"hash":"7ef33a197cf3b377624568bdb21ed2fbcd37bbe9"}