from agents.strategist import StrategistAI
from agents.platform_builder import PlatformBuilderAI
from agents.reviewer import ReviewerAI
from agents.teacher import TeacherAI
from brain.memory import Memory

class MasterAI:
    def __init__(self):
        self.memory = Memory()
        self.strategist = StrategistAI()
        self.builder = PlatformBuilderAI()
        self.reviewer = ReviewerAI()
        self.teacher = TeacherAI()

    def run(self):
        plan = self.strategist.plan()
        self.memory.log(plan)

        build = self.builder.build(plan)
        review = self.reviewer.review(build)
        explanation = self.teacher.explain(review)

        return explanation
