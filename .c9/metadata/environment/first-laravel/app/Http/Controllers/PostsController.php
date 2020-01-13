{"filter":false,"title":"PostsController.php","tooltip":"/first-laravel/app/Http/Controllers/PostsController.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":37,"column":5},"end":{"row":39,"column":5},"action":"insert","lines":["","        ","    }"],"id":398}],[{"start":{"row":38,"column":8},"end":{"row":38,"column":9},"action":"insert","lines":["r"],"id":399},{"start":{"row":38,"column":9},"end":{"row":38,"column":10},"action":"insert","lines":["e"]}],[{"start":{"row":38,"column":8},"end":{"row":38,"column":10},"action":"remove","lines":["re"],"id":400},{"start":{"row":38,"column":8},"end":{"row":38,"column":14},"action":"insert","lines":["return"]}],[{"start":{"row":38,"column":14},"end":{"row":38,"column":15},"action":"insert","lines":[" "],"id":401},{"start":{"row":38,"column":15},"end":{"row":38,"column":16},"action":"insert","lines":["v"]},{"start":{"row":38,"column":16},"end":{"row":38,"column":17},"action":"insert","lines":["i"]},{"start":{"row":38,"column":17},"end":{"row":38,"column":18},"action":"insert","lines":["e"]},{"start":{"row":38,"column":18},"end":{"row":38,"column":19},"action":"insert","lines":["w"]}],[{"start":{"row":38,"column":19},"end":{"row":38,"column":20},"action":"insert","lines":[" "],"id":402}],[{"start":{"row":38,"column":19},"end":{"row":38,"column":20},"action":"remove","lines":[" "],"id":403}],[{"start":{"row":38,"column":19},"end":{"row":38,"column":21},"action":"insert","lines":["()"],"id":404}],[{"start":{"row":38,"column":20},"end":{"row":38,"column":22},"action":"insert","lines":["''"],"id":405}],[{"start":{"row":38,"column":21},"end":{"row":38,"column":22},"action":"insert","lines":["p"],"id":406},{"start":{"row":38,"column":22},"end":{"row":38,"column":23},"action":"insert","lines":["o"]}],[{"start":{"row":38,"column":21},"end":{"row":38,"column":23},"action":"remove","lines":["po"],"id":407},{"start":{"row":38,"column":21},"end":{"row":38,"column":26},"action":"insert","lines":["posts"]}],[{"start":{"row":38,"column":26},"end":{"row":38,"column":27},"action":"insert","lines":["."],"id":408},{"start":{"row":38,"column":27},"end":{"row":38,"column":28},"action":"insert","lines":["e"]},{"start":{"row":38,"column":28},"end":{"row":38,"column":29},"action":"insert","lines":["d"]},{"start":{"row":38,"column":29},"end":{"row":38,"column":30},"action":"insert","lines":["i"]},{"start":{"row":38,"column":30},"end":{"row":38,"column":31},"action":"insert","lines":["t"]}],[{"start":{"row":38,"column":33},"end":{"row":38,"column":34},"action":"insert","lines":[";"],"id":409}],[{"start":{"row":36,"column":26},"end":{"row":36,"column":27},"action":"insert","lines":[" "],"id":410},{"start":{"row":36,"column":27},"end":{"row":36,"column":28},"action":"insert","lines":["/"]},{"start":{"row":36,"column":28},"end":{"row":36,"column":29},"action":"insert","lines":["/"]}],[{"start":{"row":36,"column":29},"end":{"row":36,"column":33},"action":"insert","lines":["編集画面"],"id":411}],[{"start":{"row":37,"column":5},"end":{"row":38,"column":0},"action":"insert","lines":["",""],"id":413},{"start":{"row":38,"column":0},"end":{"row":38,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":38,"column":8},"end":{"row":38,"column":44},"action":"insert","lines":["$post = Post::findOrFail($posts_id);"],"id":414}],[{"start":{"row":39,"column":32},"end":{"row":39,"column":51},"action":"insert","lines":[", ['post' => $post]"],"id":415}],[{"start":{"row":40,"column":5},"end":{"row":41,"column":0},"action":"insert","lines":["",""],"id":416},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]},{"start":{"row":41,"column":4},"end":{"row":42,"column":0},"action":"insert","lines":["",""]},{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"remove","lines":["    "],"id":418},{"start":{"row":42,"column":0},"end":{"row":50,"column":5},"action":"insert","lines":["public function store(Request $request) //新規投稿の登録","    {","        $params = $request->validate([ //入力チェック","            'title'=>'required|max:20', //必須で最大20文字","            'body'=>'required|max:140',","            ]);","        Post::create($params);","        return redirect()->route('top');","    }"]}],[{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "],"id":419}],[{"start":{"row":43,"column":4},"end":{"row":43,"column":8},"action":"insert","lines":["    "],"id":420}],[{"start":{"row":43,"column":4},"end":{"row":43,"column":8},"action":"remove","lines":["    "],"id":421}],[{"start":{"row":42,"column":24},"end":{"row":42,"column":25},"action":"remove","lines":["e"],"id":422},{"start":{"row":42,"column":23},"end":{"row":42,"column":24},"action":"remove","lines":["r"]},{"start":{"row":42,"column":22},"end":{"row":42,"column":23},"action":"remove","lines":["o"]},{"start":{"row":42,"column":21},"end":{"row":42,"column":22},"action":"remove","lines":["t"]},{"start":{"row":42,"column":20},"end":{"row":42,"column":21},"action":"remove","lines":["s"]}],[{"start":{"row":42,"column":20},"end":{"row":42,"column":26},"action":"insert","lines":["update"],"id":423}],[{"start":{"row":42,"column":27},"end":{"row":42,"column":36},"action":"insert","lines":["$posts_id"],"id":424}],[{"start":{"row":42,"column":36},"end":{"row":42,"column":37},"action":"insert","lines":[","],"id":425}],[{"start":{"row":42,"column":37},"end":{"row":42,"column":38},"action":"insert","lines":[" "],"id":426}],[{"start":{"row":47,"column":15},"end":{"row":48,"column":0},"action":"insert","lines":["",""],"id":427},{"start":{"row":48,"column":0},"end":{"row":48,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":48,"column":8},"end":{"row":48,"column":12},"action":"remove","lines":["    "],"id":428}],[{"start":{"row":48,"column":8},"end":{"row":48,"column":44},"action":"insert","lines":["$post = Post::findOrFail($posts_id);"],"id":429}],[{"start":{"row":49,"column":19},"end":{"row":49,"column":20},"action":"remove","lines":["e"],"id":430},{"start":{"row":49,"column":18},"end":{"row":49,"column":19},"action":"remove","lines":["t"]},{"start":{"row":49,"column":17},"end":{"row":49,"column":18},"action":"remove","lines":["a"]},{"start":{"row":49,"column":16},"end":{"row":49,"column":17},"action":"remove","lines":["e"]},{"start":{"row":49,"column":15},"end":{"row":49,"column":16},"action":"remove","lines":["r"]},{"start":{"row":49,"column":14},"end":{"row":49,"column":15},"action":"remove","lines":["c"]}],[{"start":{"row":49,"column":14},"end":{"row":49,"column":15},"action":"insert","lines":["f"],"id":431},{"start":{"row":49,"column":15},"end":{"row":49,"column":16},"action":"insert","lines":["i"]},{"start":{"row":49,"column":16},"end":{"row":49,"column":17},"action":"insert","lines":["l"]},{"start":{"row":49,"column":17},"end":{"row":49,"column":18},"action":"insert","lines":["l"]}],[{"start":{"row":49,"column":8},"end":{"row":49,"column":14},"action":"remove","lines":["Post::"],"id":432},{"start":{"row":49,"column":8},"end":{"row":49,"column":16},"action":"insert","lines":["$post = "]}],[{"start":{"row":49,"column":29},"end":{"row":49,"column":30},"action":"insert","lines":["-"],"id":433}],[{"start":{"row":49,"column":30},"end":{"row":49,"column":31},"action":"insert","lines":[">"],"id":434}],[{"start":{"row":49,"column":15},"end":{"row":49,"column":16},"action":"remove","lines":[" "],"id":435},{"start":{"row":49,"column":14},"end":{"row":49,"column":15},"action":"remove","lines":["="]},{"start":{"row":49,"column":13},"end":{"row":49,"column":14},"action":"remove","lines":[" "]}],[{"start":{"row":49,"column":13},"end":{"row":49,"column":14},"action":"insert","lines":["-"],"id":436},{"start":{"row":49,"column":14},"end":{"row":49,"column":15},"action":"insert","lines":[">"]}],[{"start":{"row":49,"column":30},"end":{"row":49,"column":31},"action":"insert","lines":["s"],"id":437},{"start":{"row":49,"column":31},"end":{"row":49,"column":32},"action":"insert","lines":["a"]},{"start":{"row":49,"column":32},"end":{"row":49,"column":33},"action":"insert","lines":["v"]},{"start":{"row":49,"column":33},"end":{"row":49,"column":34},"action":"insert","lines":["e"]}],[{"start":{"row":49,"column":34},"end":{"row":49,"column":36},"action":"insert","lines":["()"],"id":438}],[{"start":{"row":42,"column":64},"end":{"row":42,"column":65},"action":"remove","lines":["録"],"id":439},{"start":{"row":42,"column":63},"end":{"row":42,"column":64},"action":"remove","lines":["登"]},{"start":{"row":42,"column":62},"end":{"row":42,"column":63},"action":"remove","lines":["の"]},{"start":{"row":42,"column":61},"end":{"row":42,"column":62},"action":"remove","lines":["稿"]},{"start":{"row":42,"column":60},"end":{"row":42,"column":61},"action":"remove","lines":["投"]},{"start":{"row":42,"column":59},"end":{"row":42,"column":60},"action":"remove","lines":["規"]},{"start":{"row":42,"column":58},"end":{"row":42,"column":59},"action":"remove","lines":["新"]}],[{"start":{"row":42,"column":58},"end":{"row":42,"column":59},"action":"insert","lines":["k"],"id":440},{"start":{"row":42,"column":59},"end":{"row":42,"column":60},"action":"insert","lines":["o"]},{"start":{"row":42,"column":60},"end":{"row":42,"column":61},"action":"insert","lines":["u"]},{"start":{"row":42,"column":61},"end":{"row":42,"column":62},"action":"insert","lines":["s"]},{"start":{"row":42,"column":62},"end":{"row":42,"column":63},"action":"insert","lines":["i"]}],[{"start":{"row":42,"column":62},"end":{"row":42,"column":63},"action":"remove","lines":["i"],"id":441},{"start":{"row":42,"column":61},"end":{"row":42,"column":62},"action":"remove","lines":["s"]},{"start":{"row":42,"column":60},"end":{"row":42,"column":61},"action":"remove","lines":["u"]},{"start":{"row":42,"column":59},"end":{"row":42,"column":60},"action":"remove","lines":["o"]},{"start":{"row":42,"column":58},"end":{"row":42,"column":59},"action":"remove","lines":["k"]}],[{"start":{"row":42,"column":58},"end":{"row":42,"column":60},"action":"insert","lines":["更新"],"id":442}],[{"start":{"row":42,"column":32},"end":{"row":42,"column":33},"action":"remove","lines":["s"],"id":443}],[{"start":{"row":32,"column":38},"end":{"row":32,"column":39},"action":"remove","lines":["s"],"id":444}],[{"start":{"row":30,"column":37},"end":{"row":30,"column":38},"action":"remove","lines":["/"],"id":445}],[{"start":{"row":30,"column":30},"end":{"row":30,"column":31},"action":"remove","lines":["s"],"id":446}],[{"start":{"row":30,"column":35},"end":{"row":30,"column":36},"action":"insert","lines":["/"],"id":447}],[{"start":{"row":38,"column":38},"end":{"row":38,"column":39},"action":"remove","lines":["s"],"id":448}],[{"start":{"row":36,"column":25},"end":{"row":36,"column":26},"action":"insert","lines":["$"],"id":449}],[{"start":{"row":36,"column":25},"end":{"row":36,"column":26},"action":"remove","lines":["$"],"id":450},{"start":{"row":36,"column":25},"end":{"row":36,"column":33},"action":"insert","lines":["$post_id"]}],[{"start":{"row":48,"column":38},"end":{"row":48,"column":39},"action":"remove","lines":["s"],"id":451}],[{"start":{"row":51,"column":5},"end":{"row":52,"column":0},"action":"insert","lines":["",""],"id":452},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":4},"end":{"row":53,"column":0},"action":"insert","lines":["",""]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":53,"column":4},"end":{"row":53,"column":5},"action":"insert","lines":["p"],"id":453},{"start":{"row":53,"column":5},"end":{"row":53,"column":6},"action":"insert","lines":["u"]}],[{"start":{"row":53,"column":4},"end":{"row":53,"column":6},"action":"remove","lines":["pu"],"id":454},{"start":{"row":53,"column":4},"end":{"row":53,"column":10},"action":"insert","lines":["public"]}],[{"start":{"row":53,"column":10},"end":{"row":53,"column":11},"action":"insert","lines":[" "],"id":455},{"start":{"row":53,"column":11},"end":{"row":53,"column":12},"action":"insert","lines":["f"]},{"start":{"row":53,"column":12},"end":{"row":53,"column":13},"action":"insert","lines":["u"]}],[{"start":{"row":53,"column":11},"end":{"row":53,"column":13},"action":"remove","lines":["fu"],"id":456},{"start":{"row":53,"column":11},"end":{"row":53,"column":19},"action":"insert","lines":["function"]}],[{"start":{"row":53,"column":19},"end":{"row":53,"column":20},"action":"insert","lines":[" "],"id":457},{"start":{"row":53,"column":20},"end":{"row":53,"column":21},"action":"insert","lines":["d"]},{"start":{"row":53,"column":21},"end":{"row":53,"column":22},"action":"insert","lines":["e"]}],[{"start":{"row":53,"column":22},"end":{"row":53,"column":23},"action":"insert","lines":["s"],"id":458}],[{"start":{"row":53,"column":20},"end":{"row":53,"column":23},"action":"remove","lines":["des"],"id":459},{"start":{"row":53,"column":20},"end":{"row":53,"column":26},"action":"insert","lines":["destro"]}],[{"start":{"row":53,"column":26},"end":{"row":53,"column":27},"action":"insert","lines":["y"],"id":460}],[{"start":{"row":53,"column":27},"end":{"row":53,"column":29},"action":"insert","lines":["()"],"id":461}],[{"start":{"row":53,"column":28},"end":{"row":53,"column":29},"action":"insert","lines":["$"],"id":462},{"start":{"row":53,"column":29},"end":{"row":53,"column":30},"action":"insert","lines":["p"]},{"start":{"row":53,"column":30},"end":{"row":53,"column":31},"action":"insert","lines":["o"]},{"start":{"row":53,"column":31},"end":{"row":53,"column":32},"action":"insert","lines":["s"]}],[{"start":{"row":53,"column":32},"end":{"row":53,"column":33},"action":"insert","lines":["t"],"id":463}],[{"start":{"row":53,"column":28},"end":{"row":53,"column":33},"action":"remove","lines":["$post"],"id":464},{"start":{"row":53,"column":28},"end":{"row":53,"column":36},"action":"insert","lines":["$post_id"]}],[{"start":{"row":53,"column":37},"end":{"row":54,"column":0},"action":"insert","lines":["",""],"id":465},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":4},"end":{"row":54,"column":5},"action":"insert","lines":["{"]}],[{"start":{"row":54,"column":5},"end":{"row":56,"column":5},"action":"insert","lines":["","        ","    }"],"id":466}],[{"start":{"row":55,"column":0},"end":{"row":56,"column":0},"action":"remove","lines":["        ",""],"id":467},{"start":{"row":55,"column":0},"end":{"row":56,"column":0},"action":"insert","lines":["        $post = Post::findOrFail($post_id);",""]}],[{"start":{"row":55,"column":43},"end":{"row":56,"column":0},"action":"insert","lines":["",""],"id":468},{"start":{"row":56,"column":0},"end":{"row":56,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":56,"column":8},"end":{"row":56,"column":9},"action":"insert","lines":["$"],"id":469}],[{"start":{"row":56,"column":8},"end":{"row":56,"column":9},"action":"remove","lines":["$"],"id":470},{"start":{"row":56,"column":8},"end":{"row":56,"column":13},"action":"insert","lines":["$post"]}],[{"start":{"row":56,"column":13},"end":{"row":56,"column":14},"action":"insert","lines":["-"],"id":471},{"start":{"row":56,"column":14},"end":{"row":56,"column":15},"action":"insert","lines":[">"]}],[{"start":{"row":56,"column":15},"end":{"row":56,"column":16},"action":"insert","lines":["d"],"id":472},{"start":{"row":56,"column":16},"end":{"row":56,"column":17},"action":"insert","lines":["e"]},{"start":{"row":56,"column":17},"end":{"row":56,"column":18},"action":"insert","lines":["l"]}],[{"start":{"row":56,"column":18},"end":{"row":56,"column":19},"action":"insert","lines":["e"],"id":473},{"start":{"row":56,"column":19},"end":{"row":56,"column":20},"action":"insert","lines":["t"]},{"start":{"row":56,"column":20},"end":{"row":56,"column":21},"action":"insert","lines":["e"]}],[{"start":{"row":56,"column":21},"end":{"row":56,"column":23},"action":"insert","lines":["()"],"id":474}],[{"start":{"row":56,"column":23},"end":{"row":56,"column":24},"action":"insert","lines":[";"],"id":475}],[{"start":{"row":49,"column":37},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":476},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":57,"column":24},"end":{"row":58,"column":0},"action":"insert","lines":["",""],"id":477},{"start":{"row":58,"column":0},"end":{"row":58,"column":8},"action":"insert","lines":["        "]},{"start":{"row":58,"column":8},"end":{"row":59,"column":0},"action":"insert","lines":["",""]},{"start":{"row":59,"column":0},"end":{"row":59,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":59,"column":8},"end":{"row":59,"column":40},"action":"insert","lines":["return redirect()->route('top');"],"id":478}],[{"start":{"row":11,"column":55},"end":{"row":11,"column":56},"action":"remove","lines":["t"],"id":479},{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"remove","lines":["e"]},{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"remove","lines":["g"]}],[{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"insert","lines":["p"],"id":480},{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"insert","lines":["a"]}],[{"start":{"row":11,"column":55},"end":{"row":11,"column":56},"action":"insert","lines":["g"],"id":481},{"start":{"row":11,"column":56},"end":{"row":11,"column":57},"action":"insert","lines":["e"]},{"start":{"row":11,"column":57},"end":{"row":11,"column":58},"action":"insert","lines":["n"]},{"start":{"row":11,"column":58},"end":{"row":11,"column":59},"action":"insert","lines":["a"]},{"start":{"row":11,"column":59},"end":{"row":11,"column":60},"action":"insert","lines":["t"]},{"start":{"row":11,"column":60},"end":{"row":11,"column":61},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":62},"end":{"row":11,"column":63},"action":"insert","lines":["5"],"id":482}],[{"start":{"row":11,"column":65},"end":{"row":11,"column":66},"action":"insert","lines":[" "],"id":483},{"start":{"row":11,"column":66},"end":{"row":11,"column":67},"action":"insert","lines":["/"]},{"start":{"row":11,"column":67},"end":{"row":11,"column":68},"action":"insert","lines":["/"]}],[{"start":{"row":11,"column":68},"end":{"row":11,"column":74},"action":"insert","lines":["ページリンク"],"id":484}],[{"start":{"row":11,"column":73},"end":{"row":11,"column":74},"action":"remove","lines":["ク"],"id":485},{"start":{"row":11,"column":72},"end":{"row":11,"column":73},"action":"remove","lines":["ン"]},{"start":{"row":11,"column":71},"end":{"row":11,"column":72},"action":"remove","lines":["リ"]},{"start":{"row":11,"column":70},"end":{"row":11,"column":71},"action":"remove","lines":["ジ"]},{"start":{"row":11,"column":69},"end":{"row":11,"column":70},"action":"remove","lines":["ー"]},{"start":{"row":11,"column":68},"end":{"row":11,"column":69},"action":"remove","lines":["ペ"]},{"start":{"row":11,"column":67},"end":{"row":11,"column":68},"action":"remove","lines":["/"]},{"start":{"row":11,"column":66},"end":{"row":11,"column":67},"action":"remove","lines":["/"]}],[{"start":{"row":11,"column":65},"end":{"row":11,"column":66},"action":"remove","lines":[" "],"id":486}],[{"start":{"row":11,"column":65},"end":{"row":11,"column":66},"action":"remove","lines":[" "],"id":487}],[{"start":{"row":11,"column":65},"end":{"row":11,"column":66},"action":"insert","lines":[" "],"id":488}],[{"start":{"row":11,"column":97},"end":{"row":11,"column":98},"action":"insert","lines":["。"],"id":489}],[{"start":{"row":11,"column":98},"end":{"row":11,"column":104},"action":"insert","lines":["ページリンク"],"id":490}],[{"start":{"row":11,"column":103},"end":{"row":11,"column":104},"action":"remove","lines":["ク"],"id":491},{"start":{"row":11,"column":102},"end":{"row":11,"column":103},"action":"remove","lines":["ン"]},{"start":{"row":11,"column":101},"end":{"row":11,"column":102},"action":"remove","lines":["リ"]}],[{"start":{"row":11,"column":101},"end":{"row":11,"column":106},"action":"insert","lines":["ネーション"],"id":492}],[{"start":{"row":11,"column":106},"end":{"row":11,"column":107},"action":"insert","lines":["、"],"id":493}],[{"start":{"row":11,"column":106},"end":{"row":11,"column":107},"action":"remove","lines":["、"],"id":494}],[{"start":{"row":11,"column":106},"end":{"row":11,"column":109},"action":"insert","lines":["として"],"id":495}],[{"start":{"row":11,"column":109},"end":{"row":11,"column":111},"action":"insert","lines":["5件"],"id":496}],[{"start":{"row":11,"column":111},"end":{"row":11,"column":113},"action":"insert","lines":["ずつ"],"id":497}],[{"start":{"row":11,"column":113},"end":{"row":11,"column":115},"action":"insert","lines":["表示"],"id":498},{"start":{"row":11,"column":115},"end":{"row":11,"column":116},"action":"insert","lines":["。"]}],[{"start":{"row":11,"column":56},"end":{"row":11,"column":57},"action":"remove","lines":["e"],"id":499}],[{"start":{"row":11,"column":56},"end":{"row":11,"column":57},"action":"insert","lines":["i"],"id":500}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":57},"end":{"row":11,"column":57},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":true,"wrapToView":true},"firstLineState":{"row":21,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1577114993528,"hash":"d5e93deb07cbae9b08082f315a3df87adb603961"}