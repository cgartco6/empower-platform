from queue import Queue

class TaskQueue:
    def __init__(self):
        self.queue = Queue()

    def add(self, task):
        self.queue.put(task)

    def next(self):
        if not self.queue.empty():
            return self.queue.get()
        return None
