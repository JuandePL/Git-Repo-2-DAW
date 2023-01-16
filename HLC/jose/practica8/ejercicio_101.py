# 101. Implementa un programa que muestre todos los múltiplos de n entre n y m·n, ambos
# inclusive, donde n y m son números introducidos por el usuario.

n1 = int(input("Introduce un número: "))
n2 = int(input("Introduce otro número: ")) * n1

print(f"Múltiplos de {n1} entre {n1} y {n2}:")

i = n1
while i <= n2:
    if i % n1 == 0:
        print(i)
    i = i+1