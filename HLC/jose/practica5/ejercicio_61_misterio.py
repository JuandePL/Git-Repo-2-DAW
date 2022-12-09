# 61. Indica en cada uno de los siguientes programas qué valores en las respectivas entradas
# provocan la aparición de los distintos mensajes. Piensa primero la solución y comprueba luego
# que es correcta ayudándote con el ordenador.

# 1) misterio.py
# Este código pide al usuario una letra en minúscula.
# Luego evalúa si la letra si está antes de 'k' o es 'k'.
# Si es así, imprime que es de las primeras letras del alfabeto.
# Sino, comprueba que sea 'l' o más adelante. 
# Si es así, imprime que es de las últimas letras del alfabeto.

letra = input("Dame una letra minúscula: ")

if letra <= 'k':
    print("Es de las primeras del alfabeto")
if letra >= 'l':
    print("Es de las últimas del alfabeto")