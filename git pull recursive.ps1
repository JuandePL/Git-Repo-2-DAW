$dirs = Get-ChildItem -Path . | ?{ $_.PSIsContainer }
$back = pwd
foreach ($dir in $dirs)
{
    cd $dir.FullName
    echo $dir.FullName
    git pull origin
}   
cd $back.Path