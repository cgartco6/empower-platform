class Memory:
    def __init__(self):
        self.long_term = []
        self.short_term = []

    def remember(self, item):
        self.long_term.append(item)

    def recall(self):
        return self.long_term[-10:]
