A class should be open for extension but closed to modification.

"When you have a class or method you want to extend without modifying it separate the extensible behavior behind an interface, and then flip de dependencies".

- Isolate logic that changes behind an interface, and reference that interface in your class.
- Write a way that allows new functionality without altering what's already been written.

Find:
- Find the things the stuffs that needs to change
- What logic is specific
- What's changing depending on what's in the request
- What's generic
- What's seems to be the same regardless of what's currently in the request

Put those things into its own class. Implement an interface for all and references the interface in your code