<?php 
    echo '<script>
    document.write=function(s){
        var scripts = document.getElementsByTagName("script");
        var lastScript = scripts[scripts.length-1];
        lastScript.insertAdjacentHTML("beforebegin", s);
    }
</script>';

    function location($where){
        echo '<script>window.location.href=\''.$where.'\'</script>';
    }
    
    function console_log($value){
        if (is_string($value) == true){
            echo '<script>console.log(\''.$value.'\');</script>';
        }else{
            echo '<script>console.log('.$value.')</script>';
        }
    }
    
    function console_warn($value){
        if (is_string($value) == true){
            echo '<script>console.warn(\''.$value.'\');</script>';
        }else{
            echo '<script>console.warn('.$value.')</script>';
        }
    }
    
    function console_error($value){
        if (is_string($value) == true){
            echo '<script>console.error(\''.$value.'\');</script>';
        }else{
            echo '<script>console.error('.$value.')</script>';
        }
    }
    
    function alert($value){
        if (is_string($value) == true){
            echo '<script>alert(\''.$value.'\');</script>';
        }else{
            echo '<script>alert('.$value.')</script>';
        }
    }
    
    function getElementById($id, $whatkind){
        echo '<script>
        const gebi = document.getElementById("'.$id.'").'.$whatkind.';
        document.cookie = "id=" + gebi;
        </script>';
        $return_val = $_COOKIE['id'];
        
        return $return_val;
    }
    
    function script($script){
        echo '<script>'.$script.'</script>';
    }
    
    
    function import($file){
        require $file;
    }
    
    function get_import($file){
        include $file;
    }

    function python($file){
        shell_exec("python $file");
    }
      
?>
