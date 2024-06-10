# VoteElectronique

Demarrage du serveur: symfony serve:start

###########################################
# Signature de cercle
1. Compréhension des Signatures de Cercle (Ring Signatures)
Les signatures de cercle permettent à un membre d'un groupe de signer un message en tant que membre du groupe sans révéler quel membre a signé. Cela assure l'anonymat tout en permettant de vérifier que la signature provient bien d'un membre du groupe.
2. Étapes pour l'Implémentation
1. Génération des Clés
Chaque électeur doit générer une paire de clés (publique et privée). La clé publique sera utilisée pour vérifier les signatures, et la clé privée pour signer le bulletin de vote.
2. Création du Bulletin de Vote
Chaque électeur crée un bulletin de vote. Le contenu du bulletin (le choix du candidat) doit être chiffré pour assurer la confidentialité. L'électeur signe ensuite le bulletin de vote avec une signature de cercle.
3. Soumission et Vérification des Votes
Le bulletin signé et chiffré est envoyé au serveur de vote. Le serveur utilise les clés publiques pour vérifier que la signature est valide et provient bien d'un électeur autorisé, sans savoir quel électeur précisément.
4. Déchiffrement et Comptage des Votes
À la fin du vote, les bulletins sont déchiffrés et comptés. Le chiffrement doit être réalisé de manière à ce que seul un tiers de confiance ou un processus de déchiffrement multipartite puisse déchiffrer les bulletins de vote.

