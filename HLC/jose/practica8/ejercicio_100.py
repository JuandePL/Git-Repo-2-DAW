# 100. Implementa un programa que muestre todos los múltiplos de 6 entre 6 y 150, ambos
# inclusive.

print("Múltiplos de 6 entre 6 y 150:")

i = 6
while i <= 150:
    if i % 6 == 0:
        print(i)
    i = i+1