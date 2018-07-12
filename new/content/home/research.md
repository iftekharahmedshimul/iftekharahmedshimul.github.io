+++
# An example of using the custom widget to create your own homepage section.
# To create more sections, duplicate this file and edit the values below as desired.

date = "2016-04-20T00:00:00"
draft = false

title = "Research"
subtitle = ""
widget = "custom"

# Order that this section will appear in.
weight = 10

+++

My research focuses on testing, developing and understanding critical software systems and ways to combine testing, static analysis and machine learning approaches for coming up with better tools and techniques. I have been working on using static code analysis for identifying factors related to code, developer and process that affect the quality of the software measured in terms of bugs and design issues. By examining over 200 real world projects of various sizes,we have shown that projects suffer from large number of design issues and it gets worse over time. Just adding more developers or resources doesn't solve the issue rather makes it worse. Awareness about code smells would benefit developers in controlling the design degradation and eventually reduces the technical debt of a project.

My most recent research is on exploring the effectiveness of mutation analysis of programs and especially how to make mutation analysis a workable technique for real-world developers and testers. Mutation analysis is a reasonable proxy for measuring the effectiveness of test suites, but its also computationally and time intensive. Even a moderately large software project would require millions of test suite runs. This makes mutation analysis impossible to use by developers and practicing testers working on real-world problems. My research focuses on how we can scale mutation analysis to real world complex software systems.

My initial research shows that we can successfully and efficiently apply mutation analysis on systems like Linux kernel where we can reduce the number of mutants and eventually test runs by identifying equivalent and duplicate mutants and scale this technique. Our effort even identified 4 bugs in the Linux kernel. Currently I am working on a combined technique of mutant prioritization and automatic mutation analysis, which would result in a tool that application developers can use with minimum effort and can integrate in their development toolchain.
