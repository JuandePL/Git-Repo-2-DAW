# 203. Dibuja un diagrama con el estado de la memoria tras ejecutar estas sentencias:

# a = 'cadena'
# b = a[2:3]
# c = b + ''

print("     ╔═══╦═══╦═══╦═══╦═══╦═══╗")
print("a -> ║ c ║ a ║ d ║ e ║ n ║ a ║")
print("     ╠═══╬═══╩═══╩═══╩═══╩═══╝")
print("b -> ║ d ║")
print("     ╠═══╣")
print("c -> ║ d ║")
print("     ╚═══╝")