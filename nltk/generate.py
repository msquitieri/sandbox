import nltk

f = open("Hamlet.txt")
raw_text = f.read()
text_tokens = nltk.word_tokenize(raw_text)

Text = nltk.Text(word.lower() for word in text_tokens)

Text.generate()
