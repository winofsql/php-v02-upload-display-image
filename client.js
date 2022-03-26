$(function(){

    // INPUT type="file" のファイル選択後のイベント
    $("#target").on("change", function(){

        // 画像表示部分をクリア
        $("#image").html("");

        // 選択されたファイルの情報
        console.dir( this.files );

        // ファイル参照用のクラス : FileReader
        var reader = new FileReader();

        // 表示用にプロパティを追加
        reader.name = this.files[0].name;
        reader.type = this.files[0].type;

        // 画像が読み込まれると実行されるイベント
        $(reader).on("load", function () {

            // FileReader の内容
            console.dir( this );

            if ( this.type.indexOf("image/") == 0 ) {
                $("<img>").appendTo("#image")
                    .prop( {"src": this.result, "title": this.name + " : " + this.type } )
                    .css( {"width": "160px", "margin": "10px","border": "1px solid #c0c0c0" } );
            }
            else {
                $("<img>").appendTo("#image")
                    .prop( {"src": "./notimage.png", "title": this.name + " : " + this.type } )
                    .css( {"width": "160px", "margin": "10px","border": "1px solid #c0c0c0" } );
            }

        });

        if (this.files[0]) {
            // 画像を読み込み
            reader.readAsDataURL(this.files[0]);
        }

    });
    
});
