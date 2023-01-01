$dirs = Get-ChildItem -Path . | ?{ $_.PSIsContainer }
$back = pwd
foreach ($dir in $dirs)
{
    cd $dir.FullName
    echo $dir.FullName
    git fetch origin
}   
cd $back.Path