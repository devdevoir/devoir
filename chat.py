
#importe les packages nécessaires
from nltk.chat.util import Chat,reflections

#définir le dialogue dans des listes
pairs=[
    ["bonjour",["Salut"]],

    #programmation d'une réponses à plusieur questions
    ["(bonsoir|salut|coucou)",["Salut toi"]],
    ["(ça va|comment tu va)",["Je vais bien merci, en quoi puis-je t'aider ?"]],
    ["(qui est tu|t'es qui)",["Je suis un robot, et toi ?"]],
    ["(je suis un humain|un homme|une femme)",["Super presque comme moi !"]],
    ["je reviendrais vers toi si j'ai besoisn d'aide",["D'accord, je suis la pour toi, n'hésite pas à me soliciter !"]]


]

#instancier chat
chat=Chat(pairs)
chat.converse()
