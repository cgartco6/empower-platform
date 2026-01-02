from agents.strategic import StrategicAI
from agents.deep import DeepAI
from agents.builder import BuilderAI
from agents.helper import HelperAI

class GovernorAI:
    def __init__(self):
        self.strategic = StrategicAI()
        self.deep = DeepAI()
        self.builder = BuilderAI()
        self.helper = HelperAI()

    def run_cycle(self):
        plan = self.strategic.plan()
        task = self.deep.expand(plan)
        code = self.builder.build(task)
        reviewed = self.helper.review(code)
        return reviewed
