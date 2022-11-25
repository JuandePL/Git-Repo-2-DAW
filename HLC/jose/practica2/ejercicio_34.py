# 34. Diseña un programa que, a partir del valor de los dos lados de un rectángulo (4 y 6
# metros, respectivamente), muestre el valor de su perímetro (en metros) y el de su área (en metros
# cuadrados).
# (El perímetro debe darte 20 metros y el área 24 metros cuadrados).

ladoV = 4
ladoH = 6

print(f"Lado vertical: {ladoV} metros")
print(f"Lado horizontal: {ladoH} metros")
print(f"Perímetro del rectángulo: {ladoV * ladoH} m²")
print(f"Área del rectángulo: {(ladoV * 2) + (ladoH * 2)} m²")