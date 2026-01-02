class DeepAI:
    def expand(self, plan):
        return {
            "modules": [
                "authentication",
                "payments",
                "course_engine",
                "mobile_ui"
            ],
            "plan": plan
        }
