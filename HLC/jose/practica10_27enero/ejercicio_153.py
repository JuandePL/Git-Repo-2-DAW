# 153. Haz una traza del programa para la cadena "a b". ¿Qué líneas se ejecutan y qué
# valores toman las variables cambios, anterior y carácter tras la ejecución de cada una de ellas?

cadena = input("Introduce una frase: ")

while cadena != "":
    cambios = 0
    anterior = ' '
    for caracter in cadena:
        if caracter == ' ' and anterior != ' ':
            cambios += 1
        anterior = caracter

    if cadena[-1] == ' ':
        cambios -= 1

    palabras = cambios + 1
    print(f'Palabras: {palabras}')

    cadena = input("Introduce otra frase: ")
