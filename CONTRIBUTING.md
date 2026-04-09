# Contributing

Thanks for your interest in improving this project.

## Guidelines

1. Keep the WHMCS module name `AryanIctcom` unchanged unless the change is intentionally introducing a new module.
2. Preserve backward compatibility where possible.
3. Keep changes focused and easy to review.
4. Test syntax and affected flows before submitting a pull request.
5. Document meaningful behavior changes in `CHANGELOG.md`.

## Pull Requests

Please include:

- A short summary of the change
- The reason for the change
- Any compatibility impact
- Testing notes

## Coding Notes

- The module entrypoint is `modules/registrars/AryanIctcom/AryanIctcom.php`.
- Core helpers live in `Core/`.
- API operation classes live in `Calls/`.
