<?php
namespace rd\skeleton\filesControl;

class CssLink
{
    // Chemin pour chaque nom de fichier .css dans $fileName
    private static function findCssFiles(array $fileName){
        $filePath   = array();

        foreach($fileName as $file){
            $path[]     = "/public/assets/css/".$file;
        }
        
        return $path;
    }

    // génération des balises link pour chaque chemin vers les fichiers css
    public static function generateCssLink(array $fileName){
        if(count($fileName)>0 && trim($fileName[0]) !== ""){
            $linkTab = self::findCssFiles($fileName);

            $htmlLink = "";
            foreach($linkTab as $link){
                $htmlLink .= "<link rel='stylesheet' href='$link'/>\n";
            }
        }else{
            $htmlLink = "";
        }   

        return $htmlLink;
    }
}
