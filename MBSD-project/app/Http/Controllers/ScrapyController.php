<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrapyController extends Controller
{
    public function top() {
        return view('top');
    }

    public function python_exe(Request $request){
        $pythonScriptPath = "test.py";
        //$command = "python3 test.py";
        //exec($command, $output);
        //$output = shell_exec("python3 test.py");
        //dd($output);

        //pwd ls 

        //カレントディレクトリが/var/www/htmlになるのは実行時にdockerコンテナ内にマウントされるから。
        //laravelプロジェクトのルートディレクトリがdockerコンテナ内の/var/www/htmlディレクトリにマウントされる
        //ubuntu(ホスト)には存在しないがdockerコンテナ内では有効
        $cmd = 'python3 /var/www/html/Python/test.py';
        
        //exec(コマンド,出力)
        exec($cmd, $output);
        dd($output);
    }

    //topページからスクレイピングするURLを取得
    //スクレイピングをするpythonシェルの呼び出し
    //その後viewファイルに遷移
    public function scraping(Request $request) {
        $scraping_url = $request->URL;

        $cmd = 'python3 /var/www/html/Python/test.py ' . $scraping_url;
        exec($cmd, $output);
        dd($output);
        return view('scraping_result', compact('scraping_url', 'output'));
        
    }
}
